<?php


namespace App\Utils;

use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
// 使用案例
//function actionTime()
//{
//    $timer = new TimeUtil();
//    sleep(1);
//    $res = $timer->getTickTime();
//    print_r("分步操作耗时：$res\n");
//    sleep(2);
//    $res = $timer->getTotalTime();
//    print_r("总计耗时：$res\n");
//}

/**
 *
 * Class TimeUtil
 * @package App\Utils
 */
class TimeUtil
{
    private string|null|float $startTime = null;
    private string|null|float $tickTime = null;
    private string $totalTime;

    function __construct()
    {
        $this->startTime = microtime(true);
        $this->tickTime = $this->startTime;
    }

    /**
     * 获取总计时间，每个逻辑结束前调用
     */
    function getTotalTime(): string
    {
        $endTime = microtime(true);
        return self::returnFormat($this->startTime, $endTime);
    }


    static function returnFormat($startTime, $endTime): string
    {
        return bcmul(bcsub($endTime, $startTime, 2), 1000);
    }

    /**
     * 逻辑里每步时间打点
     * @return string
     */
    function getTickTime(): string
    {
        $endTime = microtime(true);
        $this->totalTime = self::returnFormat($this->tickTime, $endTime);
        $this->tickTime = $endTime;
        return $this->totalTime;
    }

    /**
     * 日志记录路由响应时间
     * @param $methodName
     */
    function logTotalTime($methodName)
    {
        $endTime = microtime(true);
        $this->totalTime = self::returnFormat($this->tickTime, $endTime);
        Log::channel('routes')->info("route 【{$methodName}】 total {$this->totalTime}ms");
        $this->tickTime = $endTime;
    }


    /**
     * 时间戳获取时间格式
     * @param int $timeStamp
     * @return string
     */
    public static function timestampToDate(int $timeStamp = 0): string
    {
        if (empty($timeStamp)) {
            $timeStamp = time();
        }
        return date('Y-m-d H:i:s', $timeStamp);
    }

    /**
     * 时间戳获取时间格式
     * @param int $timeStamp
     * @return string
     */
    public static function timestampToChineseDate(int $timeStamp = 0): string
    {
        if (empty($timeStamp)) {
            $timeStamp = time();
        }
        return date('m月d号 H时i分', $timeStamp);
    }

    /**
     * 获取当天是本月的第几周
     *
     * @param $time
     * @return int
     */
    static function getWeekV1($time): int
    {
        $totalDay = date('t', $time); //月份总天数
        $today = date('Y-m-d', $time); //月份中的第几天
        $todayW = date('W', strtotime($today)); //获取当前周数
        $firstDay = date('Y-m-01', $time); //本月第一天

        $eomW = date('W', strtotime("$firstDay + 1 month -1 day")); //这个月最后一天的周数
        $weekSum = floor($totalDay / 7); //本月总周数
        //本月总周数 - (本月尾周数 - 当前周数) + 1
        return intval(($weekSum - ($eomW - $todayW)) + 1);
    }



    /**
     * 获取当前毫秒级时间
     * @return int 毫秒级时间
     */
    static function ms()
    {
        list($ms, $seconds) = explode(' ', microtime());
        $ms_time = (float)sprintf('%.0f', (floatval($ms) + floatval($seconds)) * 1000);
        return (int)$ms_time;
    }
    /**
     * 秒转换为00:00:00格式.
     *
     * @param int $seconds 秒
     * @return string 00:00:00格式的时间
     */
    static function secondsToMinutes(int $seconds = 0): string
    {
        $hour = floor($seconds / 60);
        $seconds = $seconds % 60;
        $hour = (strlen($hour) == 1) ? '0' . $hour : $hour;
        $seconds = (strlen($seconds) == 1) ? '0' . $seconds : $seconds;
        return $hour . ':' . $seconds;
    }

    /**
     * 时间戳返回周几.
     *
     * @param int $timestamp 需要转换的时间戳
     * @param string $lang 语言，zh_CN为默认中文简体，其它为英文
     * @return array|string 周几
     */
    static function dayOfWeek(int $timestamp, string $lang = 'zh_CN'): array|string
    {
        $day = (new Carbon($timestamp))->dayOfWeek;
        return self::week($lang, $day);
    }
    /**
     * 返回一周.
     *
     * @param string $lang 语言，zh_CN为默认中文简体，其它为英文
     * @param int|null $index 一周内的第几天，注意0为周日
     * @return array|string 如果没传入index，返回的是一周的数组，反之是index对应的第几天
     */
    static function week(string $lang = 'zh_CN', int $index = null): array|string
    {
        $weekOfChinese = ['周日', '周一', '周二', '周三', '周四', '周五', '周六'];
        $weekOfEnglish = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $week = $weekOfEnglish;
        if ($lang == 'zh_CN') {
            $week = $weekOfChinese;
        }
        if ($index !== null) {
            return $week[$index];
        }
        return $week;
    }

    /**
     * 获取一周日期
     * @param int $time 时间戳
     * @param string $format 转换格式
     */
    static function getWeekArr(int $time = 0, string $format = "d"): array
    {
        if (!$time) {
            $time = time();
        }
        $week = date('w', $time);
        $weekName = array('周一', '周二', '周三', '周四', '周五');
        //星期日排到末位
        if (empty($week)) {
            $week = 7;
        }

        $data = [];
        for ($i = 0; $i <= 4; $i++) {
            $currDay = $i + 1 - $week;

            $data[$i]['d'] = date($format, strtotime("+{$currDay} days", $time));
            $data[$i]['date'] = strtotime(date('Y-m-d', strtotime("+{$currDay} days", $time)));

            $data[$i]['w'] = $weekName[$i];
            $data[$i]['click'] = 1;
            if(strtotime(date('Y-m-d', strtotime("+{$currDay} days", $time))) > time()){
                $data[$i]['click'] = 0;
            }
            // 如果当天在周六、或者周天定位到周五，周一定位到上周五
            $current_w = date('w', time());
            $diff = 24 * 3600; // 默认定位到昨天
            if ($current_w == 0) {
                $diff =  48 * 3600;
            }
            if ($current_w == 1) {
//                $diff =  72 * 3600;
                $diff =  0;
            }
            if (date('Y-m-d', strtotime("+{$currDay} days", $time)) == date('Y-m-d', time() - $diff)) {
                $data[$i]['now'] = 1;
            } else {
                $data[$i]['now'] = 0;
            }
        }
        return $data;
    }

    /**
     * 获取一天的开始时间
     * @param int $timeStamp
     * @return string
     */
    public static function getDayStartDate(int $timeStamp = 0): string
    {
        if ($timeStamp == 0) $timeStamp = time();
        return date('Y-m-d 00:00:00', $timeStamp);
    }

    /**
     * 获取一天的结束时间
     * @param int $timeStamp
     * @return string
     */
    public static function getDayEndDate(int $timeStamp = 0): string
    {
        if ($timeStamp == 0) $timeStamp = time();
        return date('Y-m-d 23:59:59', $timeStamp);
    }

    /**
     * 时间日期列表
     * @return array
     */
    public static function getDateList(): array
    {
        // 年月日展示，2020年5月开始
        $tYear = date('Y', time());
        $tMonth = date('m', time());
        $year = range(2020, $tYear);
        $date = array();

        foreach ($year as $v) {
            if ($v == $tYear && $v != 2020) {
                $month = range(1, $tMonth);
            } elseif ($v == $tYear && $v == 2020) {
                $month = range(6, $tMonth);
            } else {
                $month = range(1, 12);
            }
            foreach ($month as $m) {
                $date[] = [
                    'yearMonth' => $v . '年' . $m . '月',
                    'year' => $v,
                    'month' => $m,
                ];
            }
        }
        return array_reverse($date);
    }

    #[\JetBrains\PhpStorm\ArrayShape([
        'days' => "int",
        'hours' => "int",
        'mins' => "int",
        'secs' => "int"
    ])] static function calcDiff(int $start_time, int $end_time): array
    {

        $timeDiff = abs($start_time - $end_time);

        //计算天数
        $days = intval($timeDiff / 86400);

        //计算小时数
        $remain = $timeDiff % 86400;
        $hours = intval($remain / 3600);

        //计算分钟数
        $remain = $remain % 3600;
        $mins = intval($remain / 60);

        //计算秒数
        $secs = $remain % 60;

        return [
            'days' => $days,
            'hours' => $hours,
            'mins' => $mins,
            'secs' => $secs,
        ];
    }
}
