<?php

namespace App\Services;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MarketService
{
    protected $baseUrl = 'https://api.huobi.pro/market/tickers'; // Binance 公共 API URL

    /**
     * 获取指定币种的现价
     *
     * @param string $coin 币种（如 BTC）
     * @param string $symbol 交易对（默认 USDT）
     * @return float|null
     */
   public function getPrice($coin, $symbol = 'USDT')
   {
       try {
           return  $this->price($coin, $symbol);
        } catch (RequestException $e) {
            throw new \Exception('获取价格失败：'. $e->getMessage());
        }

   }



    public function price($coin, $symbol = 'USDT')
    {
        $json = '[
  {
    "symbol": "ETHBTC",
    "price": "0.02725000"
  },
  {
    "symbol": "LTCBTC",
    "price": "0.00124400"
  },
  {
    "symbol": "BNBBTC",
    "price": "0.00665900"
  },
  {
    "symbol": "NEOBTC",
    "price": "0.00010290"
  },
  {
    "symbol": "QTUMETH",
    "price": "0.00106400"
  },
  {
    "symbol": "EOSETH",
    "price": "0.00022330"
  },
  {
    "symbol": "SNTETH",
    "price": "0.00001047"
  },
  {
    "symbol": "BNTETH",
    "price": "0.00020260"
  },
  {
    "symbol": "BCCBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "GASBTC",
    "price": "0.00003780"
  },
  {
    "symbol": "BNBETH",
    "price": "0.24420000"
  },
  {
    "symbol": "BTCUSDT",
    "price": "91969.63000000"
  },
  {
    "symbol": "ETHUSDT",
    "price": "2505.56000000"
  },
  {
    "symbol": "HSRBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "OAXETH",
    "price": "0.00000000"
  },
  {
    "symbol": "DNTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "MCOETH",
    "price": "0.00000000"
  },
  {
    "symbol": "ICNETH",
    "price": "0.00000000"
  },
  {
    "symbol": "MCOBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "WTCBTC",
    "price": "0.00000024"
  },
  {
    "symbol": "WTCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "LRCBTC",
    "price": "0.00000129"
  },
  {
    "symbol": "LRCETH",
    "price": "0.00004736"
  },
  {
    "symbol": "QTUMBTC",
    "price": "0.00002906"
  },
  {
    "symbol": "YOYOBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "OMGBTC",
    "price": "0.00003080"
  },
  {
    "symbol": "OMGETH",
    "price": "0.00079100"
  },
  {
    "symbol": "ZRXBTC",
    "price": "0.00000315"
  },
  {
    "symbol": "ZRXETH",
    "price": "0.00009940"
  },
  {
    "symbol": "STRATBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "STRATETH",
    "price": "0.00000000"
  },
  {
    "symbol": "SNGLSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SNGLSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BQXBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BQXETH",
    "price": "0.00000000"
  },
  {
    "symbol": "KNCBTC",
    "price": "0.00000422"
  },
  {
    "symbol": "KNCETH",
    "price": "0.00039410"
  },
  {
    "symbol": "FUNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "FUNETH",
    "price": "0.00000146"
  },
  {
    "symbol": "SNMBTC",
    "price": "0.00000057"
  },
  {
    "symbol": "SNMETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NEOETH",
    "price": "0.00477500"
  },
  {
    "symbol": "IOTABTC",
    "price": "0.00000215"
  },
  {
    "symbol": "IOTAETH",
    "price": "0.00007828"
  },
  {
    "symbol": "LINKBTC",
    "price": "0.00016560"
  },
  {
    "symbol": "LINKETH",
    "price": "0.00606900"
  },
  {
    "symbol": "XVGBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "XVGETH",
    "price": "0.00000216"
  },
  {
    "symbol": "SALTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SALTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "MDABTC",
    "price": "0.00000000"
  },
  {
    "symbol": "MDAETH",
    "price": "0.00000000"
  },
  {
    "symbol": "MTLBTC",
    "price": "0.00000953"
  },
  {
    "symbol": "MTLETH",
    "price": "0.00068340"
  },
  {
    "symbol": "SUBBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SUBETH",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSBTC",
    "price": "0.00000609"
  },
  {
    "symbol": "SNTBTC",
    "price": "0.00000030"
  },
  {
    "symbol": "ETCETH",
    "price": "0.00741000"
  },
  {
    "symbol": "ETCBTC",
    "price": "0.00020210"
  },
  {
    "symbol": "MTHBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "MTHETH",
    "price": "0.00000000"
  },
  {
    "symbol": "ENGBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "ENGETH",
    "price": "0.00000000"
  },
  {
    "symbol": "DNTBTC",
    "price": "0.00000186"
  },
  {
    "symbol": "ZECBTC",
    "price": "0.00036120"
  },
  {
    "symbol": "ZECETH",
    "price": "0.01326000"
  },
  {
    "symbol": "BNTBTC",
    "price": "0.00000794"
  },
  {
    "symbol": "ASTBTC",
    "price": "0.00000124"
  },
  {
    "symbol": "ASTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "DASHBTC",
    "price": "0.00026400"
  },
  {
    "symbol": "DASHETH",
    "price": "0.00958000"
  },
  {
    "symbol": "OAXBTC",
    "price": "0.00000038"
  },
  {
    "symbol": "ICNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BTGBTC",
    "price": "0.00091300"
  },
  {
    "symbol": "BTGETH",
    "price": "0.00000000"
  },
  {
    "symbol": "EVXBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "EVXETH",
    "price": "0.00000000"
  },
  {
    "symbol": "REQBTC",
    "price": "0.00000119"
  },
  {
    "symbol": "REQETH",
    "price": "0.00000000"
  },
  {
    "symbol": "VIBBTC",
    "price": "0.00000057"
  },
  {
    "symbol": "VIBETH",
    "price": "0.00003450"
  },
  {
    "symbol": "HSRETH",
    "price": "0.00000000"
  },
  {
    "symbol": "TRXBTC",
    "price": "0.00000264"
  },
  {
    "symbol": "TRXETH",
    "price": "0.00009656"
  },
  {
    "symbol": "POWRBTC",
    "price": "0.00000222"
  },
  {
    "symbol": "POWRETH",
    "price": "0.00008110"
  },
  {
    "symbol": "ARKBTC",
    "price": "0.00001679"
  },
  {
    "symbol": "ARKETH",
    "price": "0.00000000"
  },
  {
    "symbol": "YOYOETH",
    "price": "0.00000000"
  },
  {
    "symbol": "XRPBTC",
    "price": "0.00002489"
  },
  {
    "symbol": "XRPETH",
    "price": "0.00091200"
  },
  {
    "symbol": "MODBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "MODETH",
    "price": "0.00000000"
  },
  {
    "symbol": "ENJBTC",
    "price": "0.00000117"
  },
  {
    "symbol": "ENJETH",
    "price": "0.00006172"
  },
  {
    "symbol": "STORJBTC",
    "price": "0.00000361"
  },
  {
    "symbol": "STORJETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBUSDT",
    "price": "612.00000000"
  },
  {
    "symbol": "VENBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "YOYOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "POWRBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "VENBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "VENETH",
    "price": "0.00000000"
  },
  {
    "symbol": "KMDBTC",
    "price": "0.00000187"
  },
  {
    "symbol": "KMDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NULSBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "RCNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "RCNETH",
    "price": "0.00000000"
  },
  {
    "symbol": "RCNBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NULSBTC",
    "price": "0.00000257"
  },
  {
    "symbol": "NULSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "RDNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "RDNETH",
    "price": "0.00000000"
  },
  {
    "symbol": "RDNBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "XMRBTC",
    "price": "0.00228700"
  },
  {
    "symbol": "XMRETH",
    "price": "0.04032000"
  },
  {
    "symbol": "DLTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "WTCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "DLTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "DLTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "AMBBTC",
    "price": "0.00000010"
  },
  {
    "symbol": "AMBETH",
    "price": "0.00000000"
  },
  {
    "symbol": "AMBBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BCCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BCCUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BCCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BATBTC",
    "price": "0.00000178"
  },
  {
    "symbol": "BATETH",
    "price": "0.00010630"
  },
  {
    "symbol": "BATBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BCPTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCPTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BCPTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ARNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "ARNETH",
    "price": "0.00000000"
  },
  {
    "symbol": "GVTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "GVTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "CDTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "CDTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "GXSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "GXSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NEOUSDT",
    "price": "9.46000000"
  },
  {
    "symbol": "NEOBNB",
    "price": "0.03836000"
  },
  {
    "symbol": "POEBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "POEETH",
    "price": "0.00000000"
  },
  {
    "symbol": "QSPBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "QSPETH",
    "price": "0.00000000"
  },
  {
    "symbol": "QSPBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BTSBTC",
    "price": "0.00000043"
  },
  {
    "symbol": "BTSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BTSBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "XZCBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "XZCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "XZCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LSKBTC",
    "price": "0.00000754"
  },
  {
    "symbol": "LSKETH",
    "price": "0.00033730"
  },
  {
    "symbol": "LSKBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "TNTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "TNTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "FUELBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "FUELETH",
    "price": "0.00000000"
  },
  {
    "symbol": "MANABTC",
    "price": "0.00000310"
  },
  {
    "symbol": "MANAETH",
    "price": "0.00011370"
  },
  {
    "symbol": "BCDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "DGDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "DGDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "IOTABNB",
    "price": "0.00071700"
  },
  {
    "symbol": "ADXBTC",
    "price": "0.00000133"
  },
  {
    "symbol": "ADXETH",
    "price": "0.00004881"
  },
  {
    "symbol": "ADXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ADABTC",
    "price": "0.00000748"
  },
  {
    "symbol": "ADAETH",
    "price": "0.00027390"
  },
  {
    "symbol": "PPTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "PPTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "CMTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "CMTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "CMTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "XLMBTC",
    "price": "0.00000325"
  },
  {
    "symbol": "XLMETH",
    "price": "0.00011931"
  },
  {
    "symbol": "XLMBNB",
    "price": "0.00030360"
  },
  {
    "symbol": "CNDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "CNDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "CNDBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LENDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "LENDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "WABIBTC",
    "price": "0.00000030"
  },
  {
    "symbol": "WABIETH",
    "price": "0.00000000"
  },
  {
    "symbol": "WABIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LTCETH",
    "price": "0.04558000"
  },
  {
    "symbol": "LTCUSDT",
    "price": "114.27000000"
  },
  {
    "symbol": "LTCBNB",
    "price": "0.18690000"
  },
  {
    "symbol": "TNBBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "TNBETH",
    "price": "0.00000000"
  },
  {
    "symbol": "WAVESBTC",
    "price": "0.00001626"
  },
  {
    "symbol": "WAVESETH",
    "price": "0.00029800"
  },
  {
    "symbol": "WAVESBNB",
    "price": "0.00513000"
  },
  {
    "symbol": "GTOBTC",
    "price": "0.00000077"
  },
  {
    "symbol": "GTOETH",
    "price": "0.00000000"
  },
  {
    "symbol": "GTOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ICXBTC",
    "price": "0.00000129"
  },
  {
    "symbol": "ICXETH",
    "price": "0.00011790"
  },
  {
    "symbol": "ICXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "OSTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "OSTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "OSTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ELFBTC",
    "price": "0.00000292"
  },
  {
    "symbol": "ELFETH",
    "price": "0.00010750"
  },
  {
    "symbol": "AIONBTC",
    "price": "0.00000139"
  },
  {
    "symbol": "AIONETH",
    "price": "0.00000000"
  },
  {
    "symbol": "AIONBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NEBLBTC",
    "price": "0.00001200"
  },
  {
    "symbol": "NEBLBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BRDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BRDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BRDBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MCOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "EDOBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "EDOETH",
    "price": "0.00000000"
  },
  {
    "symbol": "WINGSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "WINGSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NAVBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NAVETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NAVBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LUNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "LUNETH",
    "price": "0.00000000"
  },
  {
    "symbol": "TRIGBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "TRIGETH",
    "price": "0.00000000"
  },
  {
    "symbol": "TRIGBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "APPCBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "APPCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "APPCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "VIBEBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "VIBEETH",
    "price": "0.00000000"
  },
  {
    "symbol": "RLCBTC",
    "price": "0.00001297"
  },
  {
    "symbol": "RLCETH",
    "price": "0.00047500"
  },
  {
    "symbol": "RLCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "INSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "INSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "PIVXBTC",
    "price": "0.00000186"
  },
  {
    "symbol": "PIVXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "IOSTBTC",
    "price": "0.00000010"
  },
  {
    "symbol": "IOSTETH",
    "price": "0.00000372"
  },
  {
    "symbol": "CHATBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "CHATETH",
    "price": "0.00000000"
  },
  {
    "symbol": "STEEMBTC",
    "price": "0.00000168"
  },
  {
    "symbol": "STEEMETH",
    "price": "0.00006160"
  },
  {
    "symbol": "STEEMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NANOBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NANOETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NANOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "VIABTC",
    "price": "0.00000000"
  },
  {
    "symbol": "VIAETH",
    "price": "0.00000000"
  },
  {
    "symbol": "VIABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BLZBTC",
    "price": "0.00000060"
  },
  {
    "symbol": "BLZETH",
    "price": "0.00004159"
  },
  {
    "symbol": "BLZBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "AEBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "AEETH",
    "price": "0.00000000"
  },
  {
    "symbol": "AEBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "RPXBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "RPXETH",
    "price": "0.00000000"
  },
  {
    "symbol": "RPXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NCASHBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NCASHETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NCASHBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "POABTC",
    "price": "0.00000000"
  },
  {
    "symbol": "POAETH",
    "price": "0.00000000"
  },
  {
    "symbol": "POABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ZILBTC",
    "price": "0.00000014"
  },
  {
    "symbol": "ZILETH",
    "price": "0.00000519"
  },
  {
    "symbol": "ZILBNB",
    "price": "0.00008858"
  },
  {
    "symbol": "ONTBTC",
    "price": "0.00000181"
  },
  {
    "symbol": "ONTETH",
    "price": "0.00012530"
  },
  {
    "symbol": "ONTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "STORMBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "STORMETH",
    "price": "0.00000000"
  },
  {
    "symbol": "STORMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "QTUMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "QTUMUSDT",
    "price": "2.67100000"
  },
  {
    "symbol": "XEMBTC",
    "price": "0.00000192"
  },
  {
    "symbol": "XEMETH",
    "price": "0.00000000"
  },
  {
    "symbol": "XEMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "WANBTC",
    "price": "0.00000145"
  },
  {
    "symbol": "WANETH",
    "price": "0.00009270"
  },
  {
    "symbol": "WANBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "WPRBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "WPRETH",
    "price": "0.00000000"
  },
  {
    "symbol": "QLCBTC",
    "price": "0.00000021"
  },
  {
    "symbol": "QLCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "SYSBTC",
    "price": "0.00000064"
  },
  {
    "symbol": "SYSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "SYSBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "QLCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "GRSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "GRSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "ADAUSDT",
    "price": "0.68780000"
  },
  {
    "symbol": "ADABNB",
    "price": "0.00112400"
  },
  {
    "symbol": "CLOAKBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "CLOAKETH",
    "price": "0.00000000"
  },
  {
    "symbol": "GNTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "GNTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "GNTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LOOMBTC",
    "price": "0.00000075"
  },
  {
    "symbol": "LOOMETH",
    "price": "0.00003231"
  },
  {
    "symbol": "LOOMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "XRPUSDT",
    "price": "2.28670000"
  },
  {
    "symbol": "BCNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCNETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BCNBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "REPBTC",
    "price": "0.00034130"
  },
  {
    "symbol": "REPBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BTCTUSD",
    "price": "92241.47000000"
  },
  {
    "symbol": "TUSDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHTUSD",
    "price": "2512.52000000"
  },
  {
    "symbol": "TUSDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "TUSDBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ZENBTC",
    "price": "0.00012480"
  },
  {
    "symbol": "ZENETH",
    "price": "0.00399100"
  },
  {
    "symbol": "ZENBNB",
    "price": "0.03290000"
  },
  {
    "symbol": "SKYBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SKYETH",
    "price": "0.00000000"
  },
  {
    "symbol": "SKYBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSUSDT",
    "price": "0.55950000"
  },
  {
    "symbol": "EOSBNB",
    "price": "0.00258300"
  },
  {
    "symbol": "CVCBTC",
    "price": "0.00000566"
  },
  {
    "symbol": "CVCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "CVCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "THETABTC",
    "price": "0.00001253"
  },
  {
    "symbol": "THETAETH",
    "price": "0.00050170"
  },
  {
    "symbol": "THETABNB",
    "price": "0.00273600"
  },
  {
    "symbol": "XRPBNB",
    "price": "0.00373810"
  },
  {
    "symbol": "TUSDUSDT",
    "price": "0.99760000"
  },
  {
    "symbol": "IOTAUSDT",
    "price": "0.19830000"
  },
  {
    "symbol": "XLMUSDT",
    "price": "0.29900000"
  },
  {
    "symbol": "IOTXBTC",
    "price": "0.00000018"
  },
  {
    "symbol": "IOTXETH",
    "price": "0.00000670"
  },
  {
    "symbol": "QKCBTC",
    "price": "0.00000010"
  },
  {
    "symbol": "QKCETH",
    "price": "0.00000430"
  },
  {
    "symbol": "AGIBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "AGIETH",
    "price": "0.00000000"
  },
  {
    "symbol": "AGIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NXSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NXSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NXSBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ENJBNB",
    "price": "0.00136800"
  },
  {
    "symbol": "DATABTC",
    "price": "0.00000023"
  },
  {
    "symbol": "DATAETH",
    "price": "0.00002034"
  },
  {
    "symbol": "ONTUSDT",
    "price": "0.16700000"
  },
  {
    "symbol": "TRXBNB",
    "price": "0.00039530"
  },
  {
    "symbol": "TRXUSDT",
    "price": "0.24200000"
  },
  {
    "symbol": "ETCUSDT",
    "price": "18.59000000"
  },
  {
    "symbol": "ETCBNB",
    "price": "0.03023000"
  },
  {
    "symbol": "ICXUSDT",
    "price": "0.11870000"
  },
  {
    "symbol": "SCBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SCETH",
    "price": "0.00000151"
  },
  {
    "symbol": "NPXSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NPXSETH",
    "price": "0.00000000"
  },
  {
    "symbol": "VENUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "KEYBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "KEYETH",
    "price": "0.00000227"
  },
  {
    "symbol": "NASBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NASETH",
    "price": "0.00000000"
  },
  {
    "symbol": "NASBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MFTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "MFTETH",
    "price": "0.00000433"
  },
  {
    "symbol": "MFTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "DENTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "DENTETH",
    "price": "0.00000033"
  },
  {
    "symbol": "ARDRBTC",
    "price": "0.00000072"
  },
  {
    "symbol": "ARDRETH",
    "price": "0.00000000"
  },
  {
    "symbol": "ARDRBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NULSUSDT",
    "price": "0.23610000"
  },
  {
    "symbol": "HOTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "HOTETH",
    "price": "0.00000056"
  },
  {
    "symbol": "VETBTC",
    "price": "0.00000031"
  },
  {
    "symbol": "VETETH",
    "price": "0.00001124"
  },
  {
    "symbol": "VETUSDT",
    "price": "0.02819000"
  },
  {
    "symbol": "VETBNB",
    "price": "0.00004623"
  },
  {
    "symbol": "DOCKBTC",
    "price": "0.00000005"
  },
  {
    "symbol": "DOCKETH",
    "price": "0.00000000"
  },
  {
    "symbol": "POLYBTC",
    "price": "0.00001384"
  },
  {
    "symbol": "POLYBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "PHXBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "PHXETH",
    "price": "0.00000000"
  },
  {
    "symbol": "PHXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "HCBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "HCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "GOBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "GOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "PAXBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "PAXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "PAXUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "PAXETH",
    "price": "0.00000000"
  },
  {
    "symbol": "RVNBTC",
    "price": "0.00000014"
  },
  {
    "symbol": "DCRBTC",
    "price": "0.00021850"
  },
  {
    "symbol": "DCRBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "USDCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MITHBTC",
    "price": "0.00000080"
  },
  {
    "symbol": "MITHBNB",
    "price": "0.00004410"
  },
  {
    "symbol": "BCHABCBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHSVBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHABCUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHSVUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BTCPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "XRPPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "XLMPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "RENBTC",
    "price": "0.00000043"
  },
  {
    "symbol": "RENBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBTUSD",
    "price": "613.73000000"
  },
  {
    "symbol": "XRPTUSD",
    "price": "2.28890000"
  },
  {
    "symbol": "EOSTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "XLMTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBUSDC",
    "price": "612.09000000"
  },
  {
    "symbol": "BTCUSDC",
    "price": "91967.41000000"
  },
  {
    "symbol": "ETHUSDC",
    "price": "2505.59000000"
  },
  {
    "symbol": "XRPUSDC",
    "price": "2.28690000"
  },
  {
    "symbol": "EOSUSDC",
    "price": "0.56020000"
  },
  {
    "symbol": "XLMUSDC",
    "price": "0.29880000"
  },
  {
    "symbol": "USDCUSDT",
    "price": "1.00000000"
  },
  {
    "symbol": "ADATUSD",
    "price": "0.38470000"
  },
  {
    "symbol": "TRXTUSD",
    "price": "0.05986000"
  },
  {
    "symbol": "NEOTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "TRXXRP",
    "price": "0.10570000"
  },
  {
    "symbol": "XZCXRP",
    "price": "0.00000000"
  },
  {
    "symbol": "PAXTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "USDCTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "USDCPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "LINKUSDT",
    "price": "15.21000000"
  },
  {
    "symbol": "LINKTUSD",
    "price": "14.42300000"
  },
  {
    "symbol": "LINKPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "LINKUSDC",
    "price": "15.21000000"
  },
  {
    "symbol": "WAVESUSDT",
    "price": "1.07600000"
  },
  {
    "symbol": "WAVESTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "WAVESPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "WAVESUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHABCTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHABCPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHABCUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHSVTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHSVPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHSVUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "LTCTUSD",
    "price": "83.07000000"
  },
  {
    "symbol": "LTCPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "LTCUSDC",
    "price": "114.35000000"
  },
  {
    "symbol": "TRXPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "TRXUSDC",
    "price": "0.24220000"
  },
  {
    "symbol": "BTTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BTTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BTTUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBUSDS",
    "price": "0.00000000"
  },
  {
    "symbol": "BTCUSDS",
    "price": "0.00000000"
  },
  {
    "symbol": "USDSUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "USDSPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "USDSTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "USDSUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "BTTPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BTTTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BTTUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "ONGBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ONGBTC",
    "price": "0.00000267"
  },
  {
    "symbol": "ONGUSDT",
    "price": "0.24520000"
  },
  {
    "symbol": "HOTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "HOTUSDT",
    "price": "0.00142300"
  },
  {
    "symbol": "ZILUSDT",
    "price": "0.01314000"
  },
  {
    "symbol": "ZRXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ZRXUSDT",
    "price": "0.28980000"
  },
  {
    "symbol": "FETBNB",
    "price": "0.00109700"
  },
  {
    "symbol": "FETBTC",
    "price": "0.00000731"
  },
  {
    "symbol": "FETUSDT",
    "price": "0.67200000"
  },
  {
    "symbol": "BATUSDT",
    "price": "0.16440000"
  },
  {
    "symbol": "XMRBNB",
    "price": "0.33210000"
  },
  {
    "symbol": "XMRUSDT",
    "price": "118.70000000"
  },
  {
    "symbol": "ZECBNB",
    "price": "0.10260000"
  },
  {
    "symbol": "ZECUSDT",
    "price": "33.28000000"
  },
  {
    "symbol": "ZECPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ZECTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ZECUSDC",
    "price": "55.80000000"
  },
  {
    "symbol": "IOSTUSDT",
    "price": "0.00455100"
  },
  {
    "symbol": "CELRBNB",
    "price": "0.00005294"
  },
  {
    "symbol": "CELRBTC",
    "price": "0.00000013"
  },
  {
    "symbol": "CELRUSDT",
    "price": "0.01170000"
  },
  {
    "symbol": "ADAPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ADAUSDC",
    "price": "0.68860000"
  },
  {
    "symbol": "NEOPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "NEOUSDC",
    "price": "9.45000000"
  },
  {
    "symbol": "DASHBNB",
    "price": "0.11830000"
  },
  {
    "symbol": "DASHUSDT",
    "price": "24.28000000"
  },
  {
    "symbol": "NANOUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "OMGBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "OMGUSDT",
    "price": "0.38300000"
  },
  {
    "symbol": "THETAUSDT",
    "price": "1.15500000"
  },
  {
    "symbol": "ENJUSDT",
    "price": "0.10770000"
  },
  {
    "symbol": "MITHUSDT",
    "price": "0.00345000"
  },
  {
    "symbol": "MATICBNB",
    "price": "0.00073400"
  },
  {
    "symbol": "MATICBTC",
    "price": "0.00000667"
  },
  {
    "symbol": "MATICUSDT",
    "price": "0.37940000"
  },
  {
    "symbol": "ATOMBNB",
    "price": "0.00739000"
  },
  {
    "symbol": "ATOMBTC",
    "price": "0.00004720"
  },
  {
    "symbol": "ATOMUSDT",
    "price": "4.34600000"
  },
  {
    "symbol": "ATOMUSDC",
    "price": "4.34900000"
  },
  {
    "symbol": "ATOMPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ATOMTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ETCUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "ETCPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ETCTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BATUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "BATPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BATTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "PHBBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "PHBBTC",
    "price": "0.00000854"
  },
  {
    "symbol": "PHBUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "PHBTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "PHBPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "TFUELBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "TFUELBTC",
    "price": "0.00000049"
  },
  {
    "symbol": "TFUELUSDT",
    "price": "0.04501000"
  },
  {
    "symbol": "TFUELUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "TFUELTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "TFUELPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ONEBNB",
    "price": "0.00004537"
  },
  {
    "symbol": "ONEBTC",
    "price": "0.00000016"
  },
  {
    "symbol": "ONEUSDT",
    "price": "0.01408000"
  },
  {
    "symbol": "ONETUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ONEPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ONEUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "FTMBNB",
    "price": "0.00101440"
  },
  {
    "symbol": "FTMBTC",
    "price": "0.00000743"
  },
  {
    "symbol": "FTMUSDT",
    "price": "0.69940000"
  },
  {
    "symbol": "FTMTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "FTMPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "FTMUSDC",
    "price": "0.69860000"
  },
  {
    "symbol": "BTCBBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BCPTTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BCPTPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BCPTUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "ALGOBNB",
    "price": "0.00058250"
  },
  {
    "symbol": "ALGOBTC",
    "price": "0.00000247"
  },
  {
    "symbol": "ALGOUSDT",
    "price": "0.22700000"
  },
  {
    "symbol": "ALGOTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ALGOPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ALGOUSDC",
    "price": "0.22700000"
  },
  {
    "symbol": "USDSBUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "USDSBUSDS",
    "price": "0.00000000"
  },
  {
    "symbol": "GTOUSDT",
    "price": "0.01233000"
  },
  {
    "symbol": "GTOPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "GTOTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "GTOUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "ERDBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ERDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "ERDUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "ERDPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ERDUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "DOGEBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "DOGEBTC",
    "price": "0.00000231"
  },
  {
    "symbol": "DOGEUSDT",
    "price": "0.21208000"
  },
  {
    "symbol": "DOGEPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "DOGEUSDC",
    "price": "0.21230000"
  },
  {
    "symbol": "DUSKBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "DUSKBTC",
    "price": "0.00000129"
  },
  {
    "symbol": "DUSKUSDT",
    "price": "0.11850000"
  },
  {
    "symbol": "DUSKUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "DUSKPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BGBPUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "ANKRBNB",
    "price": "0.00008560"
  },
  {
    "symbol": "ANKRBTC",
    "price": "0.00000022"
  },
  {
    "symbol": "ANKRUSDT",
    "price": "0.02106000"
  },
  {
    "symbol": "ANKRTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ANKRPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ANKRUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "ONTPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "ONTUSDC",
    "price": "0.16590000"
  },
  {
    "symbol": "WINBNB",
    "price": "0.00000012"
  },
  {
    "symbol": "WINBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "WINUSDT",
    "price": "0.00006938"
  },
  {
    "symbol": "WINUSDC",
    "price": "0.00009730"
  },
  {
    "symbol": "COSBNB",
    "price": "0.00002678"
  },
  {
    "symbol": "COSBTC",
    "price": "0.00000008"
  },
  {
    "symbol": "COSUSDT",
    "price": "0.00440400"
  },
  {
    "symbol": "TUSDBTUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "NPXSUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "NPXSUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "COCOSBNB",
    "price": "0.00559000"
  },
  {
    "symbol": "COCOSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "COCOSUSDT",
    "price": "1.75460000"
  },
  {
    "symbol": "MTLUSDT",
    "price": "0.88300000"
  },
  {
    "symbol": "TOMOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "TOMOBTC",
    "price": "0.00003699"
  },
  {
    "symbol": "TOMOUSDT",
    "price": "1.38190000"
  },
  {
    "symbol": "TOMOUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "PERLBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "PERLBTC",
    "price": "0.00000113"
  },
  {
    "symbol": "PERLUSDC",
    "price": "0.00000000"
  },
  {
    "symbol": "PERLUSDT",
    "price": "0.00460000"
  },
  {
    "symbol": "DENTUSDT",
    "price": "0.00083900"
  },
  {
    "symbol": "MFTUSDT",
    "price": "0.00525400"
  },
  {
    "symbol": "KEYUSDT",
    "price": "0.00125300"
  },
  {
    "symbol": "STORMUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "DOCKUSDT",
    "price": "0.00390000"
  },
  {
    "symbol": "WANUSDT",
    "price": "0.13310000"
  },
  {
    "symbol": "FUNUSDT",
    "price": "0.00235200"
  },
  {
    "symbol": "CVCUSDT",
    "price": "0.11350000"
  },
  {
    "symbol": "BTTTRX",
    "price": "0.00000000"
  },
  {
    "symbol": "WINTRX",
    "price": "0.00028700"
  },
  {
    "symbol": "CHZBNB",
    "price": "0.00007820"
  },
  {
    "symbol": "CHZBTC",
    "price": "0.00000052"
  },
  {
    "symbol": "CHZUSDT",
    "price": "0.04780000"
  },
  {
    "symbol": "BANDBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BANDBTC",
    "price": "0.00000967"
  },
  {
    "symbol": "BANDUSDT",
    "price": "0.88600000"
  },
  {
    "symbol": "BNBBUSD",
    "price": "251.80000000"
  },
  {
    "symbol": "BTCBUSD",
    "price": "42769.40000000"
  },
  {
    "symbol": "BUSDUSDT",
    "price": "1.00030000"
  },
  {
    "symbol": "BEAMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BEAMBTC",
    "price": "0.00000716"
  },
  {
    "symbol": "BEAMUSDT",
    "price": "0.06520000"
  },
  {
    "symbol": "XTZBNB",
    "price": "0.00288300"
  },
  {
    "symbol": "XTZBTC",
    "price": "0.00000842"
  },
  {
    "symbol": "XTZUSDT",
    "price": "0.77600000"
  },
  {
    "symbol": "RENUSDT",
    "price": "0.04274000"
  },
  {
    "symbol": "RVNUSDT",
    "price": "0.01336000"
  },
  {
    "symbol": "HCUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "HBARBNB",
    "price": "0.00031815"
  },
  {
    "symbol": "HBARBTC",
    "price": "0.00000212"
  },
  {
    "symbol": "HBARUSDT",
    "price": "0.19466000"
  },
  {
    "symbol": "NKNBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NKNBTC",
    "price": "0.00000057"
  },
  {
    "symbol": "NKNUSDT",
    "price": "0.05240000"
  },
  {
    "symbol": "XRPBUSD",
    "price": "0.63450000"
  },
  {
    "symbol": "ETHBUSD",
    "price": "2281.12000000"
  },
  {
    "symbol": "BCHABCBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "LTCBUSD",
    "price": "72.37000000"
  },
  {
    "symbol": "LINKBUSD",
    "price": "14.07100000"
  },
  {
    "symbol": "ETCBUSD",
    "price": "19.03000000"
  },
  {
    "symbol": "STXBNB",
    "price": "0.00125200"
  },
  {
    "symbol": "STXBTC",
    "price": "0.00000836"
  },
  {
    "symbol": "STXUSDT",
    "price": "0.76900000"
  },
  {
    "symbol": "KAVABNB",
    "price": "0.00276000"
  },
  {
    "symbol": "KAVABTC",
    "price": "0.00000432"
  },
  {
    "symbol": "KAVAUSDT",
    "price": "0.39800000"
  },
  {
    "symbol": "BUSDNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "BTCNGN",
    "price": "99822596.00000000"
  },
  {
    "symbol": "ARPABNB",
    "price": "0.00015470"
  },
  {
    "symbol": "ARPABTC",
    "price": "0.00000036"
  },
  {
    "symbol": "ARPAUSDT",
    "price": "0.03367000"
  },
  {
    "symbol": "TRXBUSD",
    "price": "0.10329000"
  },
  {
    "symbol": "EOSBUSD",
    "price": "0.63400000"
  },
  {
    "symbol": "IOTXUSDT",
    "price": "0.01682000"
  },
  {
    "symbol": "RLCUSDT",
    "price": "1.18800000"
  },
  {
    "symbol": "MCOUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "XLMBUSD",
    "price": "0.11970000"
  },
  {
    "symbol": "ADABUSD",
    "price": "0.63740000"
  },
  {
    "symbol": "CTXCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "CTXCBTC",
    "price": "0.00000177"
  },
  {
    "symbol": "CTXCUSDT",
    "price": "0.16310000"
  },
  {
    "symbol": "BCHBNB",
    "price": "0.48300000"
  },
  {
    "symbol": "BCHBTC",
    "price": "0.00319800"
  },
  {
    "symbol": "BCHUSDT",
    "price": "293.90000000"
  },
  {
    "symbol": "BCHUSDC",
    "price": "294.10000000"
  },
  {
    "symbol": "BCHTUSD",
    "price": "322.00000000"
  },
  {
    "symbol": "BCHPAX",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHBUSD",
    "price": "236.00000000"
  },
  {
    "symbol": "BTCRUB",
    "price": "3900027.00000000"
  },
  {
    "symbol": "ETHRUB",
    "price": "181477.60000000"
  },
  {
    "symbol": "XRPRUB",
    "price": "56.31000000"
  },
  {
    "symbol": "BNBRUB",
    "price": "22422.22000000"
  },
  {
    "symbol": "TROYBNB",
    "price": "0.00001060"
  },
  {
    "symbol": "TROYBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "TROYUSDT",
    "price": "0.00134800"
  },
  {
    "symbol": "BUSDRUB",
    "price": "90.39000000"
  },
  {
    "symbol": "QTUMBUSD",
    "price": "2.53700000"
  },
  {
    "symbol": "VETBUSD",
    "price": "0.02120000"
  },
  {
    "symbol": "VITEBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "VITEBTC",
    "price": "0.00000007"
  },
  {
    "symbol": "VITEUSDT",
    "price": "0.00086000"
  },
  {
    "symbol": "FTTBNB",
    "price": "0.00513000"
  },
  {
    "symbol": "FTTBTC",
    "price": "0.00008560"
  },
  {
    "symbol": "FTTUSDT",
    "price": "1.75150000"
  },
  {
    "symbol": "BTCTRY",
    "price": "3359599.00000000"
  },
  {
    "symbol": "BNBTRY",
    "price": "22366.00000000"
  },
  {
    "symbol": "BUSDTRY",
    "price": "29.33000000"
  },
  {
    "symbol": "ETHTRY",
    "price": "91557.00000000"
  },
  {
    "symbol": "XRPTRY",
    "price": "83.60000000"
  },
  {
    "symbol": "USDTTRY",
    "price": "36.51000000"
  },
  {
    "symbol": "USDTRUB",
    "price": "91.10000000"
  },
  {
    "symbol": "BTCEUR",
    "price": "87850.92000000"
  },
  {
    "symbol": "ETHEUR",
    "price": "2393.26000000"
  },
  {
    "symbol": "BNBEUR",
    "price": "584.78000000"
  },
  {
    "symbol": "XRPEUR",
    "price": "2.18820000"
  },
  {
    "symbol": "EURBUSD",
    "price": "1.07570000"
  },
  {
    "symbol": "EURUSDT",
    "price": "1.04700000"
  },
  {
    "symbol": "OGNBNB",
    "price": "0.00038300"
  },
  {
    "symbol": "OGNBTC",
    "price": "0.00000076"
  },
  {
    "symbol": "OGNUSDT",
    "price": "0.07130000"
  },
  {
    "symbol": "DREPBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "DREPBTC",
    "price": "0.00000039"
  },
  {
    "symbol": "DREPUSDT",
    "price": "0.02560000"
  },
  {
    "symbol": "BULLUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BULLBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BEARUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BEARBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHBULLUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHBULLBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHBEARUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHBEARBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "TCTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "TCTBTC",
    "price": "0.00000016"
  },
  {
    "symbol": "TCTUSDT",
    "price": "0.00312000"
  },
  {
    "symbol": "WRXBNB",
    "price": "0.00039800"
  },
  {
    "symbol": "WRXBTC",
    "price": "0.00000455"
  },
  {
    "symbol": "WRXUSDT",
    "price": "0.01730000"
  },
  {
    "symbol": "ICXBUSD",
    "price": "0.16420000"
  },
  {
    "symbol": "BTSUSDT",
    "price": "0.00540000"
  },
  {
    "symbol": "BTSBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "LSKUSDT",
    "price": "0.69400000"
  },
  {
    "symbol": "BNTUSDT",
    "price": "0.47360000"
  },
  {
    "symbol": "BNTBUSD",
    "price": "0.35990000"
  },
  {
    "symbol": "LTOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LTOBTC",
    "price": "0.00000080"
  },
  {
    "symbol": "LTOUSDT",
    "price": "0.07420000"
  },
  {
    "symbol": "ATOMBUSD",
    "price": "11.21900000"
  },
  {
    "symbol": "DASHBUSD",
    "price": "25.83000000"
  },
  {
    "symbol": "NEOBUSD",
    "price": "6.73000000"
  },
  {
    "symbol": "WAVESBUSD",
    "price": "2.21600000"
  },
  {
    "symbol": "XTZBUSD",
    "price": "0.67100000"
  },
  {
    "symbol": "EOSBULLUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSBULLBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSBEARUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSBEARBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "XRPBULLUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "XRPBULLBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "XRPBEARUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "XRPBEARBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BATBUSD",
    "price": "0.17090000"
  },
  {
    "symbol": "ENJBUSD",
    "price": "0.26070000"
  },
  {
    "symbol": "NANOBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ONTBUSD",
    "price": "0.15740000"
  },
  {
    "symbol": "RVNBUSD",
    "price": "0.01525000"
  },
  {
    "symbol": "STRATBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "STRATBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "STRATUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "AIONBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "AIONUSDT",
    "price": "0.00943000"
  },
  {
    "symbol": "MBLBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MBLBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "MBLUSDT",
    "price": "0.00249500"
  },
  {
    "symbol": "COTIBNB",
    "price": "0.00021230"
  },
  {
    "symbol": "COTIBTC",
    "price": "0.00000079"
  },
  {
    "symbol": "COTIUSDT",
    "price": "0.07291000"
  },
  {
    "symbol": "ALGOBUSD",
    "price": "0.20710000"
  },
  {
    "symbol": "BTTBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "TOMOBUSD",
    "price": "1.78070000"
  },
  {
    "symbol": "XMRBUSD",
    "price": "170.20000000"
  },
  {
    "symbol": "ZECBUSD",
    "price": "25.50000000"
  },
  {
    "symbol": "BNBBULLUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBBULLBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBBEARUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBBEARBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "STPTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "STPTBTC",
    "price": "0.00000110"
  },
  {
    "symbol": "STPTUSDT",
    "price": "0.10171000"
  },
  {
    "symbol": "BTCZAR",
    "price": "1719902.00000000"
  },
  {
    "symbol": "ETHZAR",
    "price": "47000.00000000"
  },
  {
    "symbol": "BNBZAR",
    "price": "0.00000000"
  },
  {
    "symbol": "USDTZAR",
    "price": "18.71000000"
  },
  {
    "symbol": "BUSDZAR",
    "price": "18.85000000"
  },
  {
    "symbol": "BTCBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "BNBBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "WTCUSDT",
    "price": "0.01030000"
  },
  {
    "symbol": "DATABUSD",
    "price": "0.02344000"
  },
  {
    "symbol": "DATAUSDT",
    "price": "0.02118000"
  },
  {
    "symbol": "XZCUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "SOLBNB",
    "price": "0.23050000"
  },
  {
    "symbol": "SOLBTC",
    "price": "0.00153350"
  },
  {
    "symbol": "SOLUSDT",
    "price": "140.94000000"
  },
  {
    "symbol": "SOLBUSD",
    "price": "74.62000000"
  },
  {
    "symbol": "BTCIDRT",
    "price": "0.00"
  },
  {
    "symbol": "BNBIDRT",
    "price": "0.00"
  },
  {
    "symbol": "USDTIDRT",
    "price": "15907.00"
  },
  {
    "symbol": "BUSDIDRT",
    "price": "0.00"
  },
  {
    "symbol": "CTSIBTC",
    "price": "0.00000097"
  },
  {
    "symbol": "CTSIUSDT",
    "price": "0.09060000"
  },
  {
    "symbol": "CTSIBNB",
    "price": "0.00079830"
  },
  {
    "symbol": "CTSIBUSD",
    "price": "0.16420000"
  },
  {
    "symbol": "HIVEBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "HIVEBTC",
    "price": "0.00000316"
  },
  {
    "symbol": "HIVEUSDT",
    "price": "0.29210000"
  },
  {
    "symbol": "CHRBNB",
    "price": "0.00043770"
  },
  {
    "symbol": "CHRBTC",
    "price": "0.00000129"
  },
  {
    "symbol": "CHRUSDT",
    "price": "0.11830000"
  },
  {
    "symbol": "BTCUPUSDT",
    "price": "16.60000000"
  },
  {
    "symbol": "BTCDOWNUSDT",
    "price": "0.00118500"
  },
  {
    "symbol": "GXSUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "ARDRUSDT",
    "price": "0.06629000"
  },
  {
    "symbol": "ERDBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "LENDUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "HBARBUSD",
    "price": "0.06020000"
  },
  {
    "symbol": "MATICBUSD",
    "price": "0.86590000"
  },
  {
    "symbol": "WRXBUSD",
    "price": "0.11050000"
  },
  {
    "symbol": "ZILBUSD",
    "price": "0.01583000"
  },
  {
    "symbol": "MDTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MDTBTC",
    "price": "0.00000031"
  },
  {
    "symbol": "MDTUSDT",
    "price": "0.02836000"
  },
  {
    "symbol": "STMXBTC",
    "price": "0.00000016"
  },
  {
    "symbol": "STMXETH",
    "price": "0.00000292"
  },
  {
    "symbol": "STMXUSDT",
    "price": "0.00456500"
  },
  {
    "symbol": "KNCBUSD",
    "price": "0.63700000"
  },
  {
    "symbol": "KNCUSDT",
    "price": "0.38770000"
  },
  {
    "symbol": "REPBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "REPUSDT",
    "price": "4.73000000"
  },
  {
    "symbol": "LRCBUSD",
    "price": "0.17280000"
  },
  {
    "symbol": "LRCUSDT",
    "price": "0.11930000"
  },
  {
    "symbol": "IQBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "IQBUSD",
    "price": "0.00502000"
  },
  {
    "symbol": "PNTBTC",
    "price": "0.00000864"
  },
  {
    "symbol": "PNTUSDT",
    "price": "0.03500000"
  },
  {
    "symbol": "BTCGBP",
    "price": "35986.75000000"
  },
  {
    "symbol": "ETHGBP",
    "price": "1974.32000000"
  },
  {
    "symbol": "XRPGBP",
    "price": "0.52570000"
  },
  {
    "symbol": "BNBGBP",
    "price": "267.40000000"
  },
  {
    "symbol": "GBPBUSD",
    "price": "1.23900000"
  },
  {
    "symbol": "DGBBTC",
    "price": "0.00000009"
  },
  {
    "symbol": "DGBBUSD",
    "price": "0.00632000"
  },
  {
    "symbol": "BTCUAH",
    "price": "4047414.00000000"
  },
  {
    "symbol": "USDTUAH",
    "price": "43.97000000"
  },
  {
    "symbol": "COMPBTC",
    "price": "0.00055300"
  },
  {
    "symbol": "COMPBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "COMPBUSD",
    "price": "45.79000000"
  },
  {
    "symbol": "COMPUSDT",
    "price": "50.89000000"
  },
  {
    "symbol": "BTCBIDR",
    "price": "1042508253.00"
  },
  {
    "symbol": "ETHBIDR",
    "price": "47041943.00"
  },
  {
    "symbol": "BNBBIDR",
    "price": "3335250.00"
  },
  {
    "symbol": "BUSDBIDR",
    "price": "15559.00"
  },
  {
    "symbol": "USDTBIDR",
    "price": "15980.00"
  },
  {
    "symbol": "BKRWUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BKRWBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "SCUSDT",
    "price": "0.00380300"
  },
  {
    "symbol": "ZENUSDT",
    "price": "11.47000000"
  },
  {
    "symbol": "SXPBTC",
    "price": "0.00000236"
  },
  {
    "symbol": "SXPBNB",
    "price": "0.00044000"
  },
  {
    "symbol": "SXPBUSD",
    "price": "0.37210000"
  },
  {
    "symbol": "SNXBTC",
    "price": "0.00000975"
  },
  {
    "symbol": "SNXBNB",
    "price": "0.01057000"
  },
  {
    "symbol": "SNXBUSD",
    "price": "1.93600000"
  },
  {
    "symbol": "SNXUSDT",
    "price": "0.89900000"
  },
  {
    "symbol": "ETHUPUSDT",
    "price": "11.65100000"
  },
  {
    "symbol": "ETHDOWNUSDT",
    "price": "0.04570000"
  },
  {
    "symbol": "ADAUPUSDT",
    "price": "0.10400000"
  },
  {
    "symbol": "ADADOWNUSDT",
    "price": "0.00191700"
  },
  {
    "symbol": "LINKUPUSDT",
    "price": "0.00608000"
  },
  {
    "symbol": "LINKDOWNUSDT",
    "price": "0.00089500"
  },
  {
    "symbol": "VTHOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "VTHOBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "VTHOUSDT",
    "price": "0.00296000"
  },
  {
    "symbol": "DCRBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "DGBUSDT",
    "price": "0.00740000"
  },
  {
    "symbol": "GBPUSDT",
    "price": "1.18000000"
  },
  {
    "symbol": "STORJBUSD",
    "price": "0.23710000"
  },
  {
    "symbol": "SXPUSDT",
    "price": "0.21710000"
  },
  {
    "symbol": "IRISBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "IRISBTC",
    "price": "0.00000014"
  },
  {
    "symbol": "IRISBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "MKRBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MKRBTC",
    "price": "0.01490000"
  },
  {
    "symbol": "MKRUSDT",
    "price": "1370.00000000"
  },
  {
    "symbol": "MKRBUSD",
    "price": "1293.00000000"
  },
  {
    "symbol": "DAIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "DAIBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "DAIUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "DAIBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "RUNEBNB",
    "price": "0.00229100"
  },
  {
    "symbol": "RUNEBTC",
    "price": "0.00001520"
  },
  {
    "symbol": "RUNEBUSD",
    "price": "5.46200000"
  },
  {
    "symbol": "MANABUSD",
    "price": "0.43880000"
  },
  {
    "symbol": "DOGEBUSD",
    "price": "0.09742000"
  },
  {
    "symbol": "LENDBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ZRXBUSD",
    "price": "0.16890000"
  },
  {
    "symbol": "DCRUSDT",
    "price": "12.49000000"
  },
  {
    "symbol": "STORJUSDT",
    "price": "0.33190000"
  },
  {
    "symbol": "XRPBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "ADABKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "BTCAUD",
    "price": "37210.08000000"
  },
  {
    "symbol": "ETHAUD",
    "price": "2565.09000000"
  },
  {
    "symbol": "AUDBUSD",
    "price": "0.72550000"
  },
  {
    "symbol": "FIOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "FIOBTC",
    "price": "0.00000022"
  },
  {
    "symbol": "FIOBUSD",
    "price": "0.01922000"
  },
  {
    "symbol": "BNBUPUSDT",
    "price": "61.80000000"
  },
  {
    "symbol": "BNBDOWNUSDT",
    "price": "0.00215100"
  },
  {
    "symbol": "XTZUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "XTZDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "AVABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "AVABTC",
    "price": "0.00000629"
  },
  {
    "symbol": "AVABUSD",
    "price": "0.47000000"
  },
  {
    "symbol": "USDTBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "BUSDBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "IOTABUSD",
    "price": "0.14310000"
  },
  {
    "symbol": "MANAUSDT",
    "price": "0.28480000"
  },
  {
    "symbol": "XRPAUD",
    "price": "0.70000000"
  },
  {
    "symbol": "BNBAUD",
    "price": "421.10000000"
  },
  {
    "symbol": "AUDUSDT",
    "price": "0.72520000"
  },
  {
    "symbol": "BALBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BALBTC",
    "price": "0.00003122"
  },
  {
    "symbol": "BALBUSD",
    "price": "3.15000000"
  },
  {
    "symbol": "YFIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "YFIBTC",
    "price": "0.06050000"
  },
  {
    "symbol": "YFIBUSD",
    "price": "5325.00000000"
  },
  {
    "symbol": "YFIUSDT",
    "price": "5569.00000000"
  },
  {
    "symbol": "BLZBUSD",
    "price": "0.05530000"
  },
  {
    "symbol": "KMDBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BALUSDT",
    "price": "1.86200000"
  },
  {
    "symbol": "BLZUSDT",
    "price": "0.05820000"
  },
  {
    "symbol": "IRISUSDT",
    "price": "0.00521000"
  },
  {
    "symbol": "KMDUSDT",
    "price": "0.17210000"
  },
  {
    "symbol": "BTCDAI",
    "price": "91905.88000000"
  },
  {
    "symbol": "ETHDAI",
    "price": "2504.76000000"
  },
  {
    "symbol": "BNBDAI",
    "price": "561.90000000"
  },
  {
    "symbol": "USDTDAI",
    "price": "1.00000000"
  },
  {
    "symbol": "BUSDDAI",
    "price": "1.00000000"
  },
  {
    "symbol": "JSTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "JSTBTC",
    "price": "0.00000037"
  },
  {
    "symbol": "JSTBUSD",
    "price": "0.02103000"
  },
  {
    "symbol": "JSTUSDT",
    "price": "0.03322000"
  },
  {
    "symbol": "SRMBNB",
    "price": "0.00084000"
  },
  {
    "symbol": "SRMBTC",
    "price": "0.00001523"
  },
  {
    "symbol": "SRMBUSD",
    "price": "0.03530000"
  },
  {
    "symbol": "SRMUSDT",
    "price": "0.24442000"
  },
  {
    "symbol": "ANTBNB",
    "price": "0.01764000"
  },
  {
    "symbol": "ANTBTC",
    "price": "0.00014320"
  },
  {
    "symbol": "ANTBUSD",
    "price": "4.30300000"
  },
  {
    "symbol": "ANTUSDT",
    "price": "7.40700000"
  },
  {
    "symbol": "CRVBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "CRVBTC",
    "price": "0.00000473"
  },
  {
    "symbol": "CRVBUSD",
    "price": "0.50410000"
  },
  {
    "symbol": "CRVUSDT",
    "price": "0.43450000"
  },
  {
    "symbol": "SANDBNB",
    "price": "0.00066800"
  },
  {
    "symbol": "SANDBTC",
    "price": "0.00000325"
  },
  {
    "symbol": "SANDUSDT",
    "price": "0.29940000"
  },
  {
    "symbol": "SANDBUSD",
    "price": "0.32610000"
  },
  {
    "symbol": "OCEANBNB",
    "price": "0.00104400"
  },
  {
    "symbol": "OCEANBTC",
    "price": "0.00000964"
  },
  {
    "symbol": "OCEANBUSD",
    "price": "0.28480000"
  },
  {
    "symbol": "OCEANUSDT",
    "price": "0.61230000"
  },
  {
    "symbol": "NMRBTC",
    "price": "0.00011450"
  },
  {
    "symbol": "NMRBUSD",
    "price": "11.43000000"
  },
  {
    "symbol": "NMRUSDT",
    "price": "10.57000000"
  },
  {
    "symbol": "DOTBNB",
    "price": "0.00724000"
  },
  {
    "symbol": "DOTBTC",
    "price": "0.00004790"
  },
  {
    "symbol": "DOTBUSD",
    "price": "7.37300000"
  },
  {
    "symbol": "DOTUSDT",
    "price": "4.41100000"
  },
  {
    "symbol": "LUNABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LUNABTC",
    "price": "0.00000000"
  },
  {
    "symbol": "LUNABUSD",
    "price": "0.94420000"
  },
  {
    "symbol": "LUNAUSDT",
    "price": "0.21790000"
  },
  {
    "symbol": "IDEXBTC",
    "price": "0.00000036"
  },
  {
    "symbol": "IDEXBUSD",
    "price": "0.04879000"
  },
  {
    "symbol": "RSRBNB",
    "price": "0.00000852"
  },
  {
    "symbol": "RSRBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "RSRBUSD",
    "price": "0.00184000"
  },
  {
    "symbol": "RSRUSDT",
    "price": "0.00750900"
  },
  {
    "symbol": "PAXGBNB",
    "price": "6.46900000"
  },
  {
    "symbol": "PAXGBTC",
    "price": "0.03227000"
  },
  {
    "symbol": "PAXGBUSD",
    "price": "1941.00000000"
  },
  {
    "symbol": "PAXGUSDT",
    "price": "2969.00000000"
  },
  {
    "symbol": "WNXMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "WNXMBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "WNXMBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "WNXMUSDT",
    "price": "73.26000000"
  },
  {
    "symbol": "TRBBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "TRBBTC",
    "price": "0.00035500"
  },
  {
    "symbol": "TRBBUSD",
    "price": "90.12000000"
  },
  {
    "symbol": "TRBUSDT",
    "price": "32.65000000"
  },
  {
    "symbol": "ETHNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "DOTBIDR",
    "price": "72297.00"
  },
  {
    "symbol": "LINKAUD",
    "price": "7.98600000"
  },
  {
    "symbol": "SXPAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "BZRXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BZRXBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BZRXBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "BZRXUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "WBTCBTC",
    "price": "0.99970000"
  },
  {
    "symbol": "WBTCETH",
    "price": "36.67000000"
  },
  {
    "symbol": "SUSHIBNB",
    "price": "0.00269800"
  },
  {
    "symbol": "SUSHIBTC",
    "price": "0.00000808"
  },
  {
    "symbol": "SUSHIBUSD",
    "price": "0.56600000"
  },
  {
    "symbol": "SUSHIUSDT",
    "price": "0.74300000"
  },
  {
    "symbol": "YFIIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "YFIIBTC",
    "price": "0.07249000"
  },
  {
    "symbol": "YFIIBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "YFIIUSDT",
    "price": "435.50000000"
  },
  {
    "symbol": "KSMBNB",
    "price": "0.09080000"
  },
  {
    "symbol": "KSMBTC",
    "price": "0.00019690"
  },
  {
    "symbol": "KSMBUSD",
    "price": "18.87000000"
  },
  {
    "symbol": "KSMUSDT",
    "price": "18.24000000"
  },
  {
    "symbol": "EGLDBNB",
    "price": "0.03350000"
  },
  {
    "symbol": "EGLDBTC",
    "price": "0.00022230"
  },
  {
    "symbol": "EGLDBUSD",
    "price": "41.53000000"
  },
  {
    "symbol": "EGLDUSDT",
    "price": "20.43000000"
  },
  {
    "symbol": "DIABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "DIABTC",
    "price": "0.00000497"
  },
  {
    "symbol": "DIABUSD",
    "price": "0.23840000"
  },
  {
    "symbol": "DIAUSDT",
    "price": "0.45810000"
  },
  {
    "symbol": "RUNEUSDT",
    "price": "1.39700000"
  },
  {
    "symbol": "FIOUSDT",
    "price": "0.01973000"
  },
  {
    "symbol": "UMABTC",
    "price": "0.00001606"
  },
  {
    "symbol": "UMAUSDT",
    "price": "1.48400000"
  },
  {
    "symbol": "EOSUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "TRXUPUSDT",
    "price": "0.03854000"
  },
  {
    "symbol": "TRXDOWNUSDT",
    "price": "1.13900000"
  },
  {
    "symbol": "XRPUPUSDT",
    "price": "0.08550000"
  },
  {
    "symbol": "XRPDOWNUSDT",
    "price": "0.00008172"
  },
  {
    "symbol": "DOTUPUSDT",
    "price": "0.09600000"
  },
  {
    "symbol": "DOTDOWNUSDT",
    "price": "16.73700000"
  },
  {
    "symbol": "SRMBIDR",
    "price": "0.00"
  },
  {
    "symbol": "ONEBIDR",
    "price": "0.00"
  },
  {
    "symbol": "LINKTRY",
    "price": "555.70000000"
  },
  {
    "symbol": "USDTNGN",
    "price": "1518.40000000"
  },
  {
    "symbol": "BELBNB",
    "price": "0.00253800"
  },
  {
    "symbol": "BELBTC",
    "price": "0.00001011"
  },
  {
    "symbol": "BELBUSD",
    "price": "0.53560000"
  },
  {
    "symbol": "BELUSDT",
    "price": "0.92600000"
  },
  {
    "symbol": "WINGBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "WINGBTC",
    "price": "0.00010930"
  },
  {
    "symbol": "SWRVBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "SWRVBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "WINGBUSD",
    "price": "5.79000000"
  },
  {
    "symbol": "WINGUSDT",
    "price": "3.23100000"
  },
  {
    "symbol": "LTCUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "LTCDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "LENDBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "SXPEUR",
    "price": "0.26540000"
  },
  {
    "symbol": "CREAMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "CREAMBUSD",
    "price": "19.86000000"
  },
  {
    "symbol": "UNIBNB",
    "price": "0.01464000"
  },
  {
    "symbol": "UNIBTC",
    "price": "0.00008590"
  },
  {
    "symbol": "UNIBUSD",
    "price": "4.58000000"
  },
  {
    "symbol": "UNIUSDT",
    "price": "7.90500000"
  },
  {
    "symbol": "NBSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NBSUSDT",
    "price": "0.00166000"
  },
  {
    "symbol": "OXTBTC",
    "price": "0.00000092"
  },
  {
    "symbol": "OXTUSDT",
    "price": "0.08510000"
  },
  {
    "symbol": "SUNBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SUNUSDT",
    "price": "0.01831000"
  },
  {
    "symbol": "AVAXBNB",
    "price": "0.03581000"
  },
  {
    "symbol": "AVAXBTC",
    "price": "0.00023790"
  },
  {
    "symbol": "AVAXBUSD",
    "price": "38.99000000"
  },
  {
    "symbol": "AVAXUSDT",
    "price": "21.92000000"
  },
  {
    "symbol": "HNTBTC",
    "price": "0.00023570"
  },
  {
    "symbol": "HNTUSDT",
    "price": "4.67000000"
  },
  {
    "symbol": "BAKEBNB",
    "price": "0.00060280"
  },
  {
    "symbol": "BURGERBNB",
    "price": "0.00153600"
  },
  {
    "symbol": "SXPBIDR",
    "price": "0.00"
  },
  {
    "symbol": "LINKBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "FLMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "FLMBTC",
    "price": "0.00000039"
  },
  {
    "symbol": "FLMBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "FLMUSDT",
    "price": "0.03600000"
  },
  {
    "symbol": "SCRTBTC",
    "price": "0.00000237"
  },
  {
    "symbol": "SCRTETH",
    "price": "0.00016400"
  },
  {
    "symbol": "CAKEBNB",
    "price": "0.00354800"
  },
  {
    "symbol": "CAKEBUSD",
    "price": "1.54000000"
  },
  {
    "symbol": "SPARTABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "UNIUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "UNIDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "ORNBTC",
    "price": "0.00001586"
  },
  {
    "symbol": "ORNUSDT",
    "price": "1.05300000"
  },
  {
    "symbol": "TRXNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "SXPTRY",
    "price": "7.91800000"
  },
  {
    "symbol": "UTKBTC",
    "price": "0.00000045"
  },
  {
    "symbol": "UTKUSDT",
    "price": "0.04701000"
  },
  {
    "symbol": "XVSBNB",
    "price": "0.01222000"
  },
  {
    "symbol": "XVSBTC",
    "price": "0.00008150"
  },
  {
    "symbol": "XVSBUSD",
    "price": "7.03000000"
  },
  {
    "symbol": "XVSUSDT",
    "price": "7.48000000"
  },
  {
    "symbol": "ALPHABNB",
    "price": "0.00029900"
  },
  {
    "symbol": "ALPHABTC",
    "price": "0.00000047"
  },
  {
    "symbol": "ALPHABUSD",
    "price": "0.07710000"
  },
  {
    "symbol": "ALPHAUSDT",
    "price": "0.04320000"
  },
  {
    "symbol": "VIDTBTC",
    "price": "0.00000018"
  },
  {
    "symbol": "VIDTBUSD",
    "price": "0.02305000"
  },
  {
    "symbol": "AAVEBNB",
    "price": "0.15170000"
  },
  {
    "symbol": "BTCBRL",
    "price": "534344.00000000"
  },
  {
    "symbol": "USDTBRL",
    "price": "5.80800000"
  },
  {
    "symbol": "AAVEBTC",
    "price": "0.00222800"
  },
  {
    "symbol": "AAVEETH",
    "price": "0.08175000"
  },
  {
    "symbol": "AAVEBUSD",
    "price": "93.00000000"
  },
  {
    "symbol": "AAVEUSDT",
    "price": "204.76000000"
  },
  {
    "symbol": "AAVEBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "NEARBNB",
    "price": "0.00494600"
  },
  {
    "symbol": "NEARBTC",
    "price": "0.00003308"
  },
  {
    "symbol": "NEARBUSD",
    "price": "2.24900000"
  },
  {
    "symbol": "NEARUSDT",
    "price": "3.04100000"
  },
  {
    "symbol": "SXPUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "SXPDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "DOTBKRW",
    "price": "0.00000000"
  },
  {
    "symbol": "SXPGBP",
    "price": "0.00000000"
  },
  {
    "symbol": "FILBNB",
    "price": "0.00656000"
  },
  {
    "symbol": "FILBTC",
    "price": "0.00003300"
  },
  {
    "symbol": "FILBUSD",
    "price": "4.55400000"
  },
  {
    "symbol": "FILUSDT",
    "price": "3.02500000"
  },
  {
    "symbol": "FILUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "FILDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "YFIUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "YFIDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "INJBNB",
    "price": "0.02263000"
  },
  {
    "symbol": "INJBTC",
    "price": "0.00015010"
  },
  {
    "symbol": "INJBUSD",
    "price": "25.46400000"
  },
  {
    "symbol": "INJUSDT",
    "price": "13.84000000"
  },
  {
    "symbol": "AERGOBTC",
    "price": "0.00000257"
  },
  {
    "symbol": "AERGOBUSD",
    "price": "0.10030000"
  },
  {
    "symbol": "LINKEUR",
    "price": "14.53000000"
  },
  {
    "symbol": "ONEBUSD",
    "price": "0.01505000"
  },
  {
    "symbol": "EASYETH",
    "price": "0.00000000"
  },
  {
    "symbol": "AUDIOBTC",
    "price": "0.00000095"
  },
  {
    "symbol": "AUDIOBUSD",
    "price": "0.15270000"
  },
  {
    "symbol": "AUDIOUSDT",
    "price": "0.08800000"
  },
  {
    "symbol": "CTKBNB",
    "price": "0.00067800"
  },
  {
    "symbol": "CTKBTC",
    "price": "0.00000454"
  },
  {
    "symbol": "CTKBUSD",
    "price": "0.53400000"
  },
  {
    "symbol": "CTKUSDT",
    "price": "0.41690000"
  },
  {
    "symbol": "BCHUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BCHDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BOTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "BOTBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ETHBRL",
    "price": "14568.08000000"
  },
  {
    "symbol": "DOTEUR",
    "price": "4.21600000"
  },
  {
    "symbol": "AKROBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "AKROUSDT",
    "price": "0.00098100"
  },
  {
    "symbol": "KP3RBNB",
    "price": "0.20250000"
  },
  {
    "symbol": "KP3RBUSD",
    "price": "45.39000000"
  },
  {
    "symbol": "AXSBNB",
    "price": "0.00596000"
  },
  {
    "symbol": "AXSBTC",
    "price": "0.00003960"
  },
  {
    "symbol": "AXSBUSD",
    "price": "5.88000000"
  },
  {
    "symbol": "AXSUSDT",
    "price": "3.64700000"
  },
  {
    "symbol": "HARDBNB",
    "price": "0.00059200"
  },
  {
    "symbol": "HARDBTC",
    "price": "0.00000318"
  },
  {
    "symbol": "HARDBUSD",
    "price": "0.10910000"
  },
  {
    "symbol": "HARDUSDT",
    "price": "0.12650000"
  },
  {
    "symbol": "BNBBRL",
    "price": "3555.00000000"
  },
  {
    "symbol": "LTCEUR",
    "price": "109.08000000"
  },
  {
    "symbol": "RENBTCBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "RENBTCETH",
    "price": "0.00000000"
  },
  {
    "symbol": "DNTBUSD",
    "price": "0.03600000"
  },
  {
    "symbol": "DNTUSDT",
    "price": "0.03600000"
  },
  {
    "symbol": "SLPETH",
    "price": "0.00000085"
  },
  {
    "symbol": "ADAEUR",
    "price": "0.65720000"
  },
  {
    "symbol": "LTCNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "CVPETH",
    "price": "0.00032000"
  },
  {
    "symbol": "CVPBUSD",
    "price": "0.34300000"
  },
  {
    "symbol": "STRAXBTC",
    "price": "0.00000053"
  },
  {
    "symbol": "STRAXETH",
    "price": "0.00031880"
  },
  {
    "symbol": "STRAXBUSD",
    "price": "0.47100000"
  },
  {
    "symbol": "STRAXUSDT",
    "price": "0.04844000"
  },
  {
    "symbol": "FORBTC",
    "price": "0.00000006"
  },
  {
    "symbol": "FORBUSD",
    "price": "0.01703000"
  },
  {
    "symbol": "UNFIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "UNFIBTC",
    "price": "0.00001850"
  },
  {
    "symbol": "UNFIBUSD",
    "price": "7.81500000"
  },
  {
    "symbol": "UNFIUSDT",
    "price": "1.34100000"
  },
  {
    "symbol": "FRONTETH",
    "price": "0.00000000"
  },
  {
    "symbol": "FRONTBUSD",
    "price": "0.33220000"
  },
  {
    "symbol": "BCHABUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ROSEBTC",
    "price": "0.00000040"
  },
  {
    "symbol": "ROSEBUSD",
    "price": "0.06826000"
  },
  {
    "symbol": "ROSEUSDT",
    "price": "0.03725000"
  },
  {
    "symbol": "AVAXTRY",
    "price": "801.00000000"
  },
  {
    "symbol": "BUSDBRL",
    "price": "4.99100000"
  },
  {
    "symbol": "AVAUSDT",
    "price": "0.57670000"
  },
  {
    "symbol": "SYSBUSD",
    "price": "0.08180000"
  },
  {
    "symbol": "XEMUSDT",
    "price": "0.01596000"
  },
  {
    "symbol": "HEGICETH",
    "price": "0.00000000"
  },
  {
    "symbol": "HEGICBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "AAVEUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "AAVEDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "PROMBNB",
    "price": "0.01443000"
  },
  {
    "symbol": "PROMBUSD",
    "price": "4.42400000"
  },
  {
    "symbol": "XRPBRL",
    "price": "13.30600000"
  },
  {
    "symbol": "XRPNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "SKLBTC",
    "price": "0.00000034"
  },
  {
    "symbol": "SKLBUSD",
    "price": "0.02150000"
  },
  {
    "symbol": "SKLUSDT",
    "price": "0.03195000"
  },
  {
    "symbol": "BCHEUR",
    "price": "280.30000000"
  },
  {
    "symbol": "YFIEUR",
    "price": "4835.00000000"
  },
  {
    "symbol": "ZILBIDR",
    "price": "253.40"
  },
  {
    "symbol": "SUSDBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SUSDETH",
    "price": "0.00000000"
  },
  {
    "symbol": "SUSDUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "COVERETH",
    "price": "0.00000000"
  },
  {
    "symbol": "COVERBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "GLMBTC",
    "price": "0.00000358"
  },
  {
    "symbol": "GLMETH",
    "price": "0.00015020"
  },
  {
    "symbol": "GHSTETH",
    "price": "0.00081750"
  },
  {
    "symbol": "GHSTBUSD",
    "price": "0.95700000"
  },
  {
    "symbol": "SUSHIUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "SUSHIDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "XLMUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "XLMDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "LINKBRL",
    "price": "88.78000000"
  },
  {
    "symbol": "LINKNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "LTCRUB",
    "price": "6383.10000000"
  },
  {
    "symbol": "TRXTRY",
    "price": "8.84100000"
  },
  {
    "symbol": "XLMEUR",
    "price": "0.28640000"
  },
  {
    "symbol": "DFETH",
    "price": "0.00000000"
  },
  {
    "symbol": "DFBUSD",
    "price": "0.03600000"
  },
  {
    "symbol": "GRTBTC",
    "price": "0.00000131"
  },
  {
    "symbol": "GRTETH",
    "price": "0.00004815"
  },
  {
    "symbol": "GRTUSDT",
    "price": "0.12070000"
  },
  {
    "symbol": "JUVBTC",
    "price": "0.00013770"
  },
  {
    "symbol": "JUVBUSD",
    "price": "2.06500000"
  },
  {
    "symbol": "JUVUSDT",
    "price": "1.27500000"
  },
  {
    "symbol": "PSGBTC",
    "price": "0.00006930"
  },
  {
    "symbol": "PSGBUSD",
    "price": "3.01900000"
  },
  {
    "symbol": "PSGUSDT",
    "price": "2.28800000"
  },
  {
    "symbol": "BUSDBVND",
    "price": "0.00"
  },
  {
    "symbol": "USDTBVND",
    "price": "0.00"
  },
  {
    "symbol": "1INCHBTC",
    "price": "0.00000268"
  },
  {
    "symbol": "1INCHUSDT",
    "price": "0.24640000"
  },
  {
    "symbol": "REEFBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "REEFUSDT",
    "price": "0.00068800"
  },
  {
    "symbol": "OGBTC",
    "price": "0.00003740"
  },
  {
    "symbol": "OGUSDT",
    "price": "3.45600000"
  },
  {
    "symbol": "ATMBTC",
    "price": "0.00009440"
  },
  {
    "symbol": "ATMUSDT",
    "price": "1.40600000"
  },
  {
    "symbol": "ASRBTC",
    "price": "0.00013390"
  },
  {
    "symbol": "ASRUSDT",
    "price": "1.35100000"
  },
  {
    "symbol": "CELOBTC",
    "price": "0.00000412"
  },
  {
    "symbol": "CELOUSDT",
    "price": "0.37940000"
  },
  {
    "symbol": "RIFBTC",
    "price": "0.00000056"
  },
  {
    "symbol": "RIFUSDT",
    "price": "0.05150000"
  },
  {
    "symbol": "CHZTRY",
    "price": "1.74300000"
  },
  {
    "symbol": "XLMTRY",
    "price": "10.91000000"
  },
  {
    "symbol": "LINKGBP",
    "price": "13.17300000"
  },
  {
    "symbol": "GRTEUR",
    "price": "0.11500000"
  },
  {
    "symbol": "BTCSTBTC",
    "price": "0.00033100"
  },
  {
    "symbol": "BTCSTBUSD",
    "price": "1.16000000"
  },
  {
    "symbol": "BTCSTUSDT",
    "price": "5.35000000"
  },
  {
    "symbol": "TRUBTC",
    "price": "0.00000046"
  },
  {
    "symbol": "TRUBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "TRUUSDT",
    "price": "0.04240000"
  },
  {
    "symbol": "DEXEETH",
    "price": "0.00137800"
  },
  {
    "symbol": "DEXEBUSD",
    "price": "2.10000000"
  },
  {
    "symbol": "EOSEUR",
    "price": "0.76200000"
  },
  {
    "symbol": "LTCBRL",
    "price": "662.40000000"
  },
  {
    "symbol": "USDCBUSD",
    "price": "0.99990000"
  },
  {
    "symbol": "TUSDBUSD",
    "price": "0.99660000"
  },
  {
    "symbol": "PAXBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "CKBBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "CKBBUSD",
    "price": "0.00265000"
  },
  {
    "symbol": "CKBUSDT",
    "price": "0.00584700"
  },
  {
    "symbol": "TWTBTC",
    "price": "0.00001229"
  },
  {
    "symbol": "TWTBUSD",
    "price": "0.79240000"
  },
  {
    "symbol": "TWTUSDT",
    "price": "0.97600000"
  },
  {
    "symbol": "FIROBTC",
    "price": "0.00002005"
  },
  {
    "symbol": "FIROETH",
    "price": "0.00000000"
  },
  {
    "symbol": "FIROUSDT",
    "price": "1.17000000"
  },
  {
    "symbol": "BETHETH",
    "price": "0.99960000"
  },
  {
    "symbol": "DOGEEUR",
    "price": "0.20273000"
  },
  {
    "symbol": "DOGETRY",
    "price": "7.75400000"
  },
  {
    "symbol": "DOGEAUD",
    "price": "0.09449000"
  },
  {
    "symbol": "DOGEBRL",
    "price": "1.23220000"
  },
  {
    "symbol": "DOTNGN",
    "price": "0.00000000"
  },
  {
    "symbol": "PROSETH",
    "price": "0.00021600"
  },
  {
    "symbol": "LITBTC",
    "price": "0.00000775"
  },
  {
    "symbol": "LITBUSD",
    "price": "0.81200000"
  },
  {
    "symbol": "LITUSDT",
    "price": "0.74300000"
  },
  {
    "symbol": "BTCVAI",
    "price": "0.00000000"
  },
  {
    "symbol": "BUSDVAI",
    "price": "1.01500000"
  },
  {
    "symbol": "SFPBTC",
    "price": "0.00000665"
  },
  {
    "symbol": "SFPBUSD",
    "price": "0.59920000"
  },
  {
    "symbol": "SFPUSDT",
    "price": "0.61040000"
  },
  {
    "symbol": "DOGEGBP",
    "price": "0.07759000"
  },
  {
    "symbol": "DOTTRY",
    "price": "160.90000000"
  },
  {
    "symbol": "FXSBTC",
    "price": "0.00002740"
  },
  {
    "symbol": "FXSBUSD",
    "price": "6.96400000"
  },
  {
    "symbol": "DODOBTC",
    "price": "0.00000090"
  },
  {
    "symbol": "DODOBUSD",
    "price": "0.12330000"
  },
  {
    "symbol": "DODOUSDT",
    "price": "0.08290000"
  },
  {
    "symbol": "FRONTBTC",
    "price": "0.00001405"
  },
  {
    "symbol": "EASYBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "CAKEBTC",
    "price": "0.00002368"
  },
  {
    "symbol": "CAKEUSDT",
    "price": "2.17500000"
  },
  {
    "symbol": "BAKEBUSD",
    "price": "0.14260000"
  },
  {
    "symbol": "UFTETH",
    "price": "0.00016940"
  },
  {
    "symbol": "UFTBUSD",
    "price": "0.20610000"
  },
  {
    "symbol": "1INCHBUSD",
    "price": "0.25190000"
  },
  {
    "symbol": "BANDBUSD",
    "price": "1.53900000"
  },
  {
    "symbol": "GRTBUSD",
    "price": "0.10520000"
  },
  {
    "symbol": "IOSTBUSD",
    "price": "0.00700000"
  },
  {
    "symbol": "OMGBUSD",
    "price": "0.46600000"
  },
  {
    "symbol": "REEFBUSD",
    "price": "0.00139400"
  },
  {
    "symbol": "ACMBTC",
    "price": "0.00009050"
  },
  {
    "symbol": "ACMBUSD",
    "price": "2.07300000"
  },
  {
    "symbol": "ACMUSDT",
    "price": "1.06900000"
  },
  {
    "symbol": "AUCTIONBTC",
    "price": "0.00016710"
  },
  {
    "symbol": "AUCTIONBUSD",
    "price": "8.04000000"
  },
  {
    "symbol": "PHABTC",
    "price": "0.00000151"
  },
  {
    "symbol": "PHABUSD",
    "price": "0.10340000"
  },
  {
    "symbol": "DOTGBP",
    "price": "3.01500000"
  },
  {
    "symbol": "ADATRY",
    "price": "25.10000000"
  },
  {
    "symbol": "ADABRL",
    "price": "3.98600000"
  },
  {
    "symbol": "ADAGBP",
    "price": "0.51300000"
  },
  {
    "symbol": "TVKBTC",
    "price": "0.00000145"
  },
  {
    "symbol": "TVKBUSD",
    "price": "0.02043000"
  },
  {
    "symbol": "BADGERBTC",
    "price": "0.00003628"
  },
  {
    "symbol": "BADGERBUSD",
    "price": "2.07900000"
  },
  {
    "symbol": "BADGERUSDT",
    "price": "3.36700000"
  },
  {
    "symbol": "FISBTC",
    "price": "0.00000221"
  },
  {
    "symbol": "FISBUSD",
    "price": "0.24380000"
  },
  {
    "symbol": "FISUSDT",
    "price": "0.20310000"
  },
  {
    "symbol": "DOTBRL",
    "price": "25.32000000"
  },
  {
    "symbol": "ADAAUD",
    "price": "0.50540000"
  },
  {
    "symbol": "HOTTRY",
    "price": "0.05192000"
  },
  {
    "symbol": "EGLDEUR",
    "price": "19.51000000"
  },
  {
    "symbol": "OMBTC",
    "price": "0.00008705"
  },
  {
    "symbol": "OMBUSD",
    "price": "0.01891000"
  },
  {
    "symbol": "OMUSDT",
    "price": "8.00120000"
  },
  {
    "symbol": "PONDBTC",
    "price": "0.00000012"
  },
  {
    "symbol": "PONDBUSD",
    "price": "0.00936000"
  },
  {
    "symbol": "PONDUSDT",
    "price": "0.01142000"
  },
  {
    "symbol": "DEGOBTC",
    "price": "0.00003540"
  },
  {
    "symbol": "DEGOBUSD",
    "price": "1.34700000"
  },
  {
    "symbol": "DEGOUSDT",
    "price": "1.37300000"
  },
  {
    "symbol": "AVAXEUR",
    "price": "20.94000000"
  },
  {
    "symbol": "BTTTRY",
    "price": "0.00000000"
  },
  {
    "symbol": "CHZBRL",
    "price": "0.30210000"
  },
  {
    "symbol": "UNIEUR",
    "price": "4.85600000"
  },
  {
    "symbol": "ALICEBTC",
    "price": "0.00000672"
  },
  {
    "symbol": "ALICEBUSD",
    "price": "0.72600000"
  },
  {
    "symbol": "ALICEUSDT",
    "price": "0.61800000"
  },
  {
    "symbol": "CHZBUSD",
    "price": "0.07460000"
  },
  {
    "symbol": "CHZEUR",
    "price": "0.05300000"
  },
  {
    "symbol": "CHZGBP",
    "price": "0.05720000"
  },
  {
    "symbol": "BIFIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BIFIBUSD",
    "price": "359.60000000"
  },
  {
    "symbol": "LINABTC",
    "price": "0.00000008"
  },
  {
    "symbol": "LINABUSD",
    "price": "0.01013100"
  },
  {
    "symbol": "LINAUSDT",
    "price": "0.00224500"
  },
  {
    "symbol": "ADARUB",
    "price": "34.49000000"
  },
  {
    "symbol": "ENJBRL",
    "price": "1.32800000"
  },
  {
    "symbol": "ENJEUR",
    "price": "0.19460000"
  },
  {
    "symbol": "MATICEUR",
    "price": "0.34440000"
  },
  {
    "symbol": "NEOTRY",
    "price": "345.60000000"
  },
  {
    "symbol": "PERPBTC",
    "price": "0.00000450"
  },
  {
    "symbol": "PERPBUSD",
    "price": "0.54698000"
  },
  {
    "symbol": "PERPUSDT",
    "price": "0.41620000"
  },
  {
    "symbol": "RAMPBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "RAMPBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "RAMPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "SUPERBTC",
    "price": "0.00000640"
  },
  {
    "symbol": "SUPERBUSD",
    "price": "0.07270000"
  },
  {
    "symbol": "SUPERUSDT",
    "price": "0.58750000"
  },
  {
    "symbol": "CFXBTC",
    "price": "0.00000121"
  },
  {
    "symbol": "CFXBUSD",
    "price": "0.15400000"
  },
  {
    "symbol": "CFXUSDT",
    "price": "0.11210000"
  },
  {
    "symbol": "ENJGBP",
    "price": "0.36760000"
  },
  {
    "symbol": "EOSTRY",
    "price": "20.48000000"
  },
  {
    "symbol": "LTCGBP",
    "price": "63.56000000"
  },
  {
    "symbol": "LUNAEUR",
    "price": "0.00000000"
  },
  {
    "symbol": "RVNTRY",
    "price": "0.48650000"
  },
  {
    "symbol": "THETAEUR",
    "price": "0.61400000"
  },
  {
    "symbol": "XVGBUSD",
    "price": "0.00365100"
  },
  {
    "symbol": "EPSBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "EPSBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "EPSUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "AUTOBTC",
    "price": "0.00324000"
  },
  {
    "symbol": "AUTOBUSD",
    "price": "95.10000000"
  },
  {
    "symbol": "AUTOUSDT",
    "price": "95.30000000"
  },
  {
    "symbol": "TKOBTC",
    "price": "0.00000397"
  },
  {
    "symbol": "TKOBIDR",
    "price": "3360.00"
  },
  {
    "symbol": "TKOBUSD",
    "price": "0.20820000"
  },
  {
    "symbol": "TKOUSDT",
    "price": "0.25580000"
  },
  {
    "symbol": "PUNDIXETH",
    "price": "0.00016660"
  },
  {
    "symbol": "PUNDIXUSDT",
    "price": "0.34370000"
  },
  {
    "symbol": "BTTBRL",
    "price": "0.00000000"
  },
  {
    "symbol": "BTTEUR",
    "price": "0.00000000"
  },
  {
    "symbol": "HOTEUR",
    "price": "0.00178900"
  },
  {
    "symbol": "WINEUR",
    "price": "0.00006601"
  },
  {
    "symbol": "TLMBTC",
    "price": "0.00000006"
  },
  {
    "symbol": "TLMBUSD",
    "price": "0.00941000"
  },
  {
    "symbol": "TLMUSDT",
    "price": "0.00651000"
  },
  {
    "symbol": "1INCHUPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "1INCHDOWNUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BTGBUSD",
    "price": "17.62000000"
  },
  {
    "symbol": "BTGUSDT",
    "price": "17.65000000"
  },
  {
    "symbol": "HOTBUSD",
    "price": "0.00105800"
  },
  {
    "symbol": "BNBUAH",
    "price": "26795.00000000"
  },
  {
    "symbol": "ONTTRY",
    "price": "6.10700000"
  },
  {
    "symbol": "VETEUR",
    "price": "0.02696000"
  },
  {
    "symbol": "VETGBP",
    "price": "0.01430000"
  },
  {
    "symbol": "WINBRL",
    "price": "0.00065760"
  },
  {
    "symbol": "MIRBTC",
    "price": "0.00000838"
  },
  {
    "symbol": "MIRBUSD",
    "price": "0.13237000"
  },
  {
    "symbol": "MIRUSDT",
    "price": "0.14168000"
  },
  {
    "symbol": "BARBTC",
    "price": "0.00014100"
  },
  {
    "symbol": "BARBUSD",
    "price": "2.53300000"
  },
  {
    "symbol": "BARUSDT",
    "price": "1.63100000"
  },
  {
    "symbol": "FORTHBTC",
    "price": "0.00003480"
  },
  {
    "symbol": "FORTHBUSD",
    "price": "3.02700000"
  },
  {
    "symbol": "FORTHUSDT",
    "price": "3.20100000"
  },
  {
    "symbol": "CAKEGBP",
    "price": "2.71400000"
  },
  {
    "symbol": "DOGERUB",
    "price": "6.94000000"
  },
  {
    "symbol": "HOTBRL",
    "price": "0.00000000"
  },
  {
    "symbol": "WRXEUR",
    "price": "0.00000000"
  },
  {
    "symbol": "EZBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "EZETH",
    "price": "0.00000000"
  },
  {
    "symbol": "BAKEUSDT",
    "price": "0.17450000"
  },
  {
    "symbol": "BURGERBUSD",
    "price": "0.32080000"
  },
  {
    "symbol": "BURGERUSDT",
    "price": "0.28690000"
  },
  {
    "symbol": "SLPBUSD",
    "price": "0.00148700"
  },
  {
    "symbol": "SLPUSDT",
    "price": "0.00212300"
  },
  {
    "symbol": "TRXAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "TRXEUR",
    "price": "0.23120000"
  },
  {
    "symbol": "VETTRY",
    "price": "1.02860000"
  },
  {
    "symbol": "SHIBUSDT",
    "price": "0.00001389"
  },
  {
    "symbol": "SHIBBUSD",
    "price": "0.00000931"
  },
  {
    "symbol": "ICPBTC",
    "price": "0.00006890"
  },
  {
    "symbol": "ICPBNB",
    "price": "0.01680000"
  },
  {
    "symbol": "ICPBUSD",
    "price": "3.89700000"
  },
  {
    "symbol": "ICPUSDT",
    "price": "6.32800000"
  },
  {
    "symbol": "SHIBEUR",
    "price": "0.00001326"
  },
  {
    "symbol": "SHIBRUB",
    "price": "0.00000000"
  },
  {
    "symbol": "ETCEUR",
    "price": "20.00000000"
  },
  {
    "symbol": "ETCBRL",
    "price": "0.00000000"
  },
  {
    "symbol": "DOGEBIDR",
    "price": "955.00"
  },
  {
    "symbol": "ARBTC",
    "price": "0.00008560"
  },
  {
    "symbol": "ARBNB",
    "price": "0.02183000"
  },
  {
    "symbol": "ARBUSD",
    "price": "3.85200000"
  },
  {
    "symbol": "ARUSDT",
    "price": "7.87000000"
  },
  {
    "symbol": "POLSBTC",
    "price": "0.00001859"
  },
  {
    "symbol": "POLSBNB",
    "price": "0.00265000"
  },
  {
    "symbol": "POLSBUSD",
    "price": "0.25670000"
  },
  {
    "symbol": "POLSUSDT",
    "price": "0.30790000"
  },
  {
    "symbol": "MDXBTC",
    "price": "0.00000077"
  },
  {
    "symbol": "MDXBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MDXBUSD",
    "price": "0.06440000"
  },
  {
    "symbol": "MDXUSDT",
    "price": "0.03450000"
  },
  {
    "symbol": "MASKBNB",
    "price": "0.00357700"
  },
  {
    "symbol": "MASKBUSD",
    "price": "3.58700000"
  },
  {
    "symbol": "MASKUSDT",
    "price": "2.18600000"
  },
  {
    "symbol": "LPTBTC",
    "price": "0.00006850"
  },
  {
    "symbol": "LPTBNB",
    "price": "0.01027000"
  },
  {
    "symbol": "LPTBUSD",
    "price": "6.16000000"
  },
  {
    "symbol": "LPTUSDT",
    "price": "6.31700000"
  },
  {
    "symbol": "ETHUAH",
    "price": "109973.00000000"
  },
  {
    "symbol": "MATICBRL",
    "price": "2.12500000"
  },
  {
    "symbol": "SOLEUR",
    "price": "134.79000000"
  },
  {
    "symbol": "SHIBBRL",
    "price": "0.00008073"
  },
  {
    "symbol": "AGIXBTC",
    "price": "0.00000969"
  },
  {
    "symbol": "ICPEUR",
    "price": "6.03600000"
  },
  {
    "symbol": "MATICGBP",
    "price": "0.81900000"
  },
  {
    "symbol": "SHIBTRY",
    "price": "0.00050700"
  },
  {
    "symbol": "MATICBIDR",
    "price": "8382.00"
  },
  {
    "symbol": "MATICRUB",
    "price": "76.47000000"
  },
  {
    "symbol": "NUBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "NUBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "NUBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "NUUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "XVGUSDT",
    "price": "0.00546100"
  },
  {
    "symbol": "RLCBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "CELRBUSD",
    "price": "0.01148000"
  },
  {
    "symbol": "ATMBUSD",
    "price": "2.42000000"
  },
  {
    "symbol": "ZENBUSD",
    "price": "7.19000000"
  },
  {
    "symbol": "FTMBUSD",
    "price": "0.42180000"
  },
  {
    "symbol": "THETABUSD",
    "price": "0.61600000"
  },
  {
    "symbol": "WINBUSD",
    "price": "0.00006940"
  },
  {
    "symbol": "KAVABUSD",
    "price": "0.62400000"
  },
  {
    "symbol": "XEMBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ATABTC",
    "price": "0.00000063"
  },
  {
    "symbol": "ATABNB",
    "price": "0.00036900"
  },
  {
    "symbol": "ATABUSD",
    "price": "0.07920000"
  },
  {
    "symbol": "ATAUSDT",
    "price": "0.05830000"
  },
  {
    "symbol": "GTCBTC",
    "price": "0.00000688"
  },
  {
    "symbol": "GTCBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "GTCBUSD",
    "price": "0.95200000"
  },
  {
    "symbol": "GTCUSDT",
    "price": "0.41300000"
  },
  {
    "symbol": "TORNBTC",
    "price": "0.00023980"
  },
  {
    "symbol": "TORNBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "TORNBUSD",
    "price": "1.69000000"
  },
  {
    "symbol": "TORNUSDT",
    "price": "4.06000000"
  },
  {
    "symbol": "MATICTRY",
    "price": "12.92000000"
  },
  {
    "symbol": "ETCGBP",
    "price": "0.00000000"
  },
  {
    "symbol": "SOLGBP",
    "price": "88.08000000"
  },
  {
    "symbol": "BAKEBTC",
    "price": "0.00000190"
  },
  {
    "symbol": "COTIBUSD",
    "price": "0.03732000"
  },
  {
    "symbol": "KEEPBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "KEEPBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "KEEPBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "KEEPUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "SOLTRY",
    "price": "5149.40000000"
  },
  {
    "symbol": "RUNEGBP",
    "price": "1.27800000"
  },
  {
    "symbol": "SOLBRL",
    "price": "819.30000000"
  },
  {
    "symbol": "SCBUSD",
    "price": "0.00366400"
  },
  {
    "symbol": "CHRBUSD",
    "price": "0.10850000"
  },
  {
    "symbol": "STMXBUSD",
    "price": "0.00585100"
  },
  {
    "symbol": "HNTBUSD",
    "price": "1.22800000"
  },
  {
    "symbol": "FTTBUSD",
    "price": "1.13000000"
  },
  {
    "symbol": "DOCKBUSD",
    "price": "0.01527000"
  },
  {
    "symbol": "ADABIDR",
    "price": "3965.00"
  },
  {
    "symbol": "ERNBNB",
    "price": "0.00669000"
  },
  {
    "symbol": "ERNBUSD",
    "price": "1.47100000"
  },
  {
    "symbol": "ERNUSDT",
    "price": "1.26900000"
  },
  {
    "symbol": "KLAYBTC",
    "price": "0.00000185"
  },
  {
    "symbol": "KLAYBNB",
    "price": "0.00061800"
  },
  {
    "symbol": "KLAYBUSD",
    "price": "0.13540000"
  },
  {
    "symbol": "KLAYUSDT",
    "price": "0.12550000"
  },
  {
    "symbol": "RUNEEUR",
    "price": "3.76200000"
  },
  {
    "symbol": "MATICAUD",
    "price": "1.21410000"
  },
  {
    "symbol": "DOTRUB",
    "price": "493.50000000"
  },
  {
    "symbol": "UTKBUSD",
    "price": "0.05610000"
  },
  {
    "symbol": "IOTXBUSD",
    "price": "0.02148000"
  },
  {
    "symbol": "PHAUSDT",
    "price": "0.13910000"
  },
  {
    "symbol": "SOLRUB",
    "price": "5467.00000000"
  },
  {
    "symbol": "RUNEAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "BUSDUAH",
    "price": "41.12000000"
  },
  {
    "symbol": "BONDBTC",
    "price": "0.00003108"
  },
  {
    "symbol": "BONDBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BONDBUSD",
    "price": "4.26200000"
  },
  {
    "symbol": "BONDUSDT",
    "price": "2.15200000"
  },
  {
    "symbol": "MLNBTC",
    "price": "0.00012550"
  },
  {
    "symbol": "MLNBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MLNBUSD",
    "price": "15.73000000"
  },
  {
    "symbol": "MLNUSDT",
    "price": "11.61000000"
  },
  {
    "symbol": "GRTTRY",
    "price": "4.39900000"
  },
  {
    "symbol": "CAKEBRL",
    "price": "0.00000000"
  },
  {
    "symbol": "ICPRUB",
    "price": "0.00000000"
  },
  {
    "symbol": "DOTAUD",
    "price": "6.63100000"
  },
  {
    "symbol": "AAVEBRL",
    "price": "0.00000000"
  },
  {
    "symbol": "EOSAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "DEXEUSDT",
    "price": "19.35500000"
  },
  {
    "symbol": "LTOBUSD",
    "price": "0.05590000"
  },
  {
    "symbol": "ADXBUSD",
    "price": "0.13340000"
  },
  {
    "symbol": "QUICKBTC",
    "price": "0.00000074"
  },
  {
    "symbol": "QUICKBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "QUICKBUSD",
    "price": "74.10000000"
  },
  {
    "symbol": "C98USDT",
    "price": "0.08270000"
  },
  {
    "symbol": "C98BUSD",
    "price": "0.13430000"
  },
  {
    "symbol": "C98BNB",
    "price": "0.00080500"
  },
  {
    "symbol": "C98BTC",
    "price": "0.00000162"
  },
  {
    "symbol": "CLVBTC",
    "price": "0.00000029"
  },
  {
    "symbol": "CLVBNB",
    "price": "0.00026430"
  },
  {
    "symbol": "CLVBUSD",
    "price": "0.03282000"
  },
  {
    "symbol": "CLVUSDT",
    "price": "0.02937000"
  },
  {
    "symbol": "QNTBTC",
    "price": "0.00100200"
  },
  {
    "symbol": "QNTBNB",
    "price": "0.40150000"
  },
  {
    "symbol": "QNTBUSD",
    "price": "85.50000000"
  },
  {
    "symbol": "QNTUSDT",
    "price": "92.20000000"
  },
  {
    "symbol": "FLOWBTC",
    "price": "0.00000510"
  },
  {
    "symbol": "FLOWBNB",
    "price": "0.00247400"
  },
  {
    "symbol": "FLOWBUSD",
    "price": "0.51300000"
  },
  {
    "symbol": "FLOWUSDT",
    "price": "0.47000000"
  },
  {
    "symbol": "XECBUSD",
    "price": "0.00003100"
  },
  {
    "symbol": "AXSBRL",
    "price": "38.36000000"
  },
  {
    "symbol": "AXSAUD",
    "price": "8.66000000"
  },
  {
    "symbol": "TVKUSDT",
    "price": "0.05405000"
  },
  {
    "symbol": "MINABTC",
    "price": "0.00000333"
  },
  {
    "symbol": "MINABNB",
    "price": "0.00166600"
  },
  {
    "symbol": "MINABUSD",
    "price": "0.37790000"
  },
  {
    "symbol": "MINAUSDT",
    "price": "0.30640000"
  },
  {
    "symbol": "RAYBNB",
    "price": "0.00480400"
  },
  {
    "symbol": "RAYBUSD",
    "price": "0.17010000"
  },
  {
    "symbol": "RAYUSDT",
    "price": "2.93300000"
  },
  {
    "symbol": "FARMBTC",
    "price": "0.00075100"
  },
  {
    "symbol": "FARMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "FARMBUSD",
    "price": "21.12000000"
  },
  {
    "symbol": "FARMUSDT",
    "price": "30.40000000"
  },
  {
    "symbol": "ALPACABTC",
    "price": "0.00000234"
  },
  {
    "symbol": "ALPACABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ALPACABUSD",
    "price": "0.14390000"
  },
  {
    "symbol": "ALPACAUSDT",
    "price": "0.11560000"
  },
  {
    "symbol": "TLMTRY",
    "price": "0.23760000"
  },
  {
    "symbol": "QUICKUSDT",
    "price": "0.02372000"
  },
  {
    "symbol": "ORNBUSD",
    "price": "0.55190000"
  },
  {
    "symbol": "MBOXBTC",
    "price": "0.00000121"
  },
  {
    "symbol": "MBOXBNB",
    "price": "0.00069200"
  },
  {
    "symbol": "MBOXBUSD",
    "price": "0.20900000"
  },
  {
    "symbol": "MBOXUSDT",
    "price": "0.11130000"
  },
  {
    "symbol": "VGXBTC",
    "price": "0.00002524"
  },
  {
    "symbol": "VGXETH",
    "price": "0.00034800"
  },
  {
    "symbol": "FORUSDT",
    "price": "0.00306000"
  },
  {
    "symbol": "REQUSDT",
    "price": "0.10920000"
  },
  {
    "symbol": "GHSTUSDT",
    "price": "0.48700000"
  },
  {
    "symbol": "TRURUB",
    "price": "2.98000000"
  },
  {
    "symbol": "FISBRL",
    "price": "1.78100000"
  },
  {
    "symbol": "WAXPUSDT",
    "price": "0.02962000"
  },
  {
    "symbol": "WAXPBUSD",
    "price": "0.04170000"
  },
  {
    "symbol": "WAXPBNB",
    "price": "0.00017060"
  },
  {
    "symbol": "WAXPBTC",
    "price": "0.00000032"
  },
  {
    "symbol": "TRIBEBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "TRIBEBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "TRIBEBUSD",
    "price": "0.20570000"
  },
  {
    "symbol": "TRIBEUSDT",
    "price": "0.20180000"
  },
  {
    "symbol": "GNOUSDT",
    "price": "161.00000000"
  },
  {
    "symbol": "GNOBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "GNOBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "GNOBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "ARPATRY",
    "price": "1.22910000"
  },
  {
    "symbol": "PROMBTC",
    "price": "0.00008960"
  },
  {
    "symbol": "MTLBUSD",
    "price": "1.35300000"
  },
  {
    "symbol": "OGNBUSD",
    "price": "0.11290000"
  },
  {
    "symbol": "XECUSDT",
    "price": "0.00002348"
  },
  {
    "symbol": "C98BRL",
    "price": "1.30800000"
  },
  {
    "symbol": "SOLAUD",
    "price": "28.48000000"
  },
  {
    "symbol": "XRPBIDR",
    "price": "7835.00"
  },
  {
    "symbol": "POLYBUSD",
    "price": "0.27000000"
  },
  {
    "symbol": "ELFUSDT",
    "price": "0.26860000"
  },
  {
    "symbol": "DYDXUSDT",
    "price": "0.66890000"
  },
  {
    "symbol": "DYDXBUSD",
    "price": "3.77100000"
  },
  {
    "symbol": "DYDXBNB",
    "price": "0.00333300"
  },
  {
    "symbol": "DYDXBTC",
    "price": "0.00000728"
  },
  {
    "symbol": "ELFBUSD",
    "price": "0.34030000"
  },
  {
    "symbol": "POLYUSDT",
    "price": "0.26960000"
  },
  {
    "symbol": "IDEXUSDT",
    "price": "0.03310000"
  },
  {
    "symbol": "VIDTUSDT",
    "price": "0.01637000"
  },
  {
    "symbol": "SOLBIDR",
    "price": "311087.00"
  },
  {
    "symbol": "AXSBIDR",
    "price": "72500.00"
  },
  {
    "symbol": "BTCUSDP",
    "price": "19435.03000000"
  },
  {
    "symbol": "ETHUSDP",
    "price": "1344.37000000"
  },
  {
    "symbol": "BNBUSDP",
    "price": "282.09000000"
  },
  {
    "symbol": "USDPBUSD",
    "price": "1.00000000"
  },
  {
    "symbol": "USDPUSDT",
    "price": "1.00010000"
  },
  {
    "symbol": "GALAUSDT",
    "price": "0.01915000"
  },
  {
    "symbol": "GALABUSD",
    "price": "0.02957000"
  },
  {
    "symbol": "GALABNB",
    "price": "0.00003091"
  },
  {
    "symbol": "GALABTC",
    "price": "0.00000020"
  },
  {
    "symbol": "FTMBIDR",
    "price": "3413.00"
  },
  {
    "symbol": "ALGOBIDR",
    "price": "0.00"
  },
  {
    "symbol": "CAKEAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "KSMAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "WAVESRUB",
    "price": "0.00000000"
  },
  {
    "symbol": "SUNBUSD",
    "price": "0.00544000"
  },
  {
    "symbol": "ILVUSDT",
    "price": "16.29000000"
  },
  {
    "symbol": "ILVBUSD",
    "price": "39.06000000"
  },
  {
    "symbol": "ILVBNB",
    "price": "0.17900000"
  },
  {
    "symbol": "ILVBTC",
    "price": "0.00017700"
  },
  {
    "symbol": "RENBUSD",
    "price": "0.04539800"
  },
  {
    "symbol": "YGGUSDT",
    "price": "0.21500000"
  },
  {
    "symbol": "YGGBUSD",
    "price": "0.40530000"
  },
  {
    "symbol": "YGGBNB",
    "price": "0.00068700"
  },
  {
    "symbol": "YGGBTC",
    "price": "0.00000233"
  },
  {
    "symbol": "STXBUSD",
    "price": "0.67560000"
  },
  {
    "symbol": "SYSUSDT",
    "price": "0.05940000"
  },
  {
    "symbol": "DFUSDT",
    "price": "0.07571000"
  },
  {
    "symbol": "SOLUSDC",
    "price": "141.00000000"
  },
  {
    "symbol": "ARPARUB",
    "price": "4.92800000"
  },
  {
    "symbol": "LTCUAH",
    "price": "3191.00000000"
  },
  {
    "symbol": "FETBUSD",
    "price": "0.49150000"
  },
  {
    "symbol": "ARPABUSD",
    "price": "0.04660000"
  },
  {
    "symbol": "LSKBUSD",
    "price": "0.84400000"
  },
  {
    "symbol": "AVAXBIDR",
    "price": "266752.00"
  },
  {
    "symbol": "ALICEBIDR",
    "price": "29103.00"
  },
  {
    "symbol": "FIDAUSDT",
    "price": "0.11290000"
  },
  {
    "symbol": "FIDABUSD",
    "price": "0.17820000"
  },
  {
    "symbol": "FIDABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "FIDABTC",
    "price": "0.00000122"
  },
  {
    "symbol": "DENTBUSD",
    "price": "0.00070700"
  },
  {
    "symbol": "FRONTUSDT",
    "price": "0.88000000"
  },
  {
    "symbol": "CVPUSDT",
    "price": "0.03390000"
  },
  {
    "symbol": "AGLDBTC",
    "price": "0.00001512"
  },
  {
    "symbol": "AGLDBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "AGLDBUSD",
    "price": "0.82700000"
  },
  {
    "symbol": "AGLDUSDT",
    "price": "1.39300000"
  },
  {
    "symbol": "RADBTC",
    "price": "0.00001387"
  },
  {
    "symbol": "RADBNB",
    "price": "0.01032000"
  },
  {
    "symbol": "RADBUSD",
    "price": "1.32100000"
  },
  {
    "symbol": "RADUSDT",
    "price": "0.80000000"
  },
  {
    "symbol": "UNIAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "HIVEBUSD",
    "price": "0.27580000"
  },
  {
    "symbol": "STPTBUSD",
    "price": "0.04185000"
  },
  {
    "symbol": "BETABTC",
    "price": "0.00000067"
  },
  {
    "symbol": "BETABNB",
    "price": "0.00033500"
  },
  {
    "symbol": "BETABUSD",
    "price": "0.06354000"
  },
  {
    "symbol": "BETAUSDT",
    "price": "0.02243000"
  },
  {
    "symbol": "SHIBAUD",
    "price": "0.00001121"
  },
  {
    "symbol": "RAREBTC",
    "price": "0.00000065"
  },
  {
    "symbol": "RAREBNB",
    "price": "0.00069100"
  },
  {
    "symbol": "RAREBUSD",
    "price": "0.05960000"
  },
  {
    "symbol": "RAREUSDT",
    "price": "0.05990000"
  },
  {
    "symbol": "AVAXBRL",
    "price": "127.40000000"
  },
  {
    "symbol": "AVAXAUD",
    "price": "17.91000000"
  },
  {
    "symbol": "LUNAAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "TROYBUSD",
    "price": "0.00226900"
  },
  {
    "symbol": "AXSETH",
    "price": "0.00145600"
  },
  {
    "symbol": "FTMETH",
    "price": "0.00021480"
  },
  {
    "symbol": "SOLETH",
    "price": "0.05627000"
  },
  {
    "symbol": "SSVBTC",
    "price": "0.00011370"
  },
  {
    "symbol": "SSVETH",
    "price": "0.00417800"
  },
  {
    "symbol": "LAZIOTRY",
    "price": "39.73000000"
  },
  {
    "symbol": "LAZIOEUR",
    "price": "2.54800000"
  },
  {
    "symbol": "LAZIOBTC",
    "price": "0.00003995"
  },
  {
    "symbol": "LAZIOUSDT",
    "price": "1.08800000"
  },
  {
    "symbol": "CHESSBTC",
    "price": "0.00000272"
  },
  {
    "symbol": "CHESSBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "CHESSBUSD",
    "price": "0.12000000"
  },
  {
    "symbol": "CHESSUSDT",
    "price": "0.10490000"
  },
  {
    "symbol": "FTMAUD",
    "price": "0.42000000"
  },
  {
    "symbol": "FTMBRL",
    "price": "1.92300000"
  },
  {
    "symbol": "SCRTBUSD",
    "price": "0.26290000"
  },
  {
    "symbol": "ADXUSDT",
    "price": "0.12220000"
  },
  {
    "symbol": "AUCTIONUSDT",
    "price": "15.46000000"
  },
  {
    "symbol": "CELOBUSD",
    "price": "0.47000000"
  },
  {
    "symbol": "FTMRUB",
    "price": "36.85000000"
  },
  {
    "symbol": "NUAUD",
    "price": "0.00000000"
  },
  {
    "symbol": "NURUB",
    "price": "0.00000000"
  },
  {
    "symbol": "REEFTRY",
    "price": "0.02349000"
  },
  {
    "symbol": "REEFBIDR",
    "price": "0.00"
  },
  {
    "symbol": "SHIBDOGE",
    "price": "0.00006560"
  },
  {
    "symbol": "DARUSDT",
    "price": "0.21707000"
  },
  {
    "symbol": "DARBUSD",
    "price": "0.07995000"
  },
  {
    "symbol": "DARBNB",
    "price": "0.00037248"
  },
  {
    "symbol": "DARBTC",
    "price": "0.00000157"
  },
  {
    "symbol": "BNXBTC",
    "price": "0.00000384"
  },
  {
    "symbol": "BNXBNB",
    "price": "0.00122700"
  },
  {
    "symbol": "BNXBUSD",
    "price": "0.27430000"
  },
  {
    "symbol": "BNXUSDT",
    "price": "0.97730000"
  },
  {
    "symbol": "RGTUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "RGTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "RGTBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "RGTBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LAZIOBUSD",
    "price": "1.64400000"
  },
  {
    "symbol": "OXTBUSD",
    "price": "0.05130000"
  },
  {
    "symbol": "MANATRY",
    "price": "10.42000000"
  },
  {
    "symbol": "ALGORUB",
    "price": "12.60000000"
  },
  {
    "symbol": "SHIBUAH",
    "price": "0.00000000"
  },
  {
    "symbol": "LUNABIDR",
    "price": "0.00"
  },
  {
    "symbol": "AUDUSDC",
    "price": "0.64770000"
  },
  {
    "symbol": "MOVRBTC",
    "price": "0.00007650"
  },
  {
    "symbol": "MOVRBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "MOVRBUSD",
    "price": "3.69000000"
  },
  {
    "symbol": "MOVRUSDT",
    "price": "7.08300000"
  },
  {
    "symbol": "CITYBTC",
    "price": "0.00006030"
  },
  {
    "symbol": "CITYBNB",
    "price": "0.01454000"
  },
  {
    "symbol": "CITYBUSD",
    "price": "2.96400000"
  },
  {
    "symbol": "CITYUSDT",
    "price": "1.16600000"
  },
  {
    "symbol": "ENSBTC",
    "price": "0.00025740"
  },
  {
    "symbol": "ENSBNB",
    "price": "0.03091000"
  },
  {
    "symbol": "ENSBUSD",
    "price": "6.96000000"
  },
  {
    "symbol": "ENSUSDT",
    "price": "23.56000000"
  },
  {
    "symbol": "SANDETH",
    "price": "0.00014660"
  },
  {
    "symbol": "DOTETH",
    "price": "0.00176100"
  },
  {
    "symbol": "MATICETH",
    "price": "0.00016160"
  },
  {
    "symbol": "ANKRBUSD",
    "price": "0.01906000"
  },
  {
    "symbol": "SANDTRY",
    "price": "10.93000000"
  },
  {
    "symbol": "MANABRL",
    "price": "1.66100000"
  },
  {
    "symbol": "KP3RUSDT",
    "price": "16.48000000"
  },
  {
    "symbol": "QIUSDT",
    "price": "0.00882000"
  },
  {
    "symbol": "QIBUSD",
    "price": "0.00507000"
  },
  {
    "symbol": "QIBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "QIBTC",
    "price": "0.00000012"
  },
  {
    "symbol": "PORTOBTC",
    "price": "0.00002103"
  },
  {
    "symbol": "PORTOUSDT",
    "price": "1.08400000"
  },
  {
    "symbol": "PORTOTRY",
    "price": "39.60000000"
  },
  {
    "symbol": "PORTOEUR",
    "price": "2.71500000"
  },
  {
    "symbol": "POWRUSDT",
    "price": "0.20450000"
  },
  {
    "symbol": "POWRBUSD",
    "price": "0.15040000"
  },
  {
    "symbol": "AVAXETH",
    "price": "0.00874000"
  },
  {
    "symbol": "SLPTRY",
    "price": "0.07744000"
  },
  {
    "symbol": "FISTRY",
    "price": "0.00000000"
  },
  {
    "symbol": "LRCTRY",
    "price": "4.35300000"
  },
  {
    "symbol": "CHRETH",
    "price": "0.00007080"
  },
  {
    "symbol": "FISBIDR",
    "price": "0.00"
  },
  {
    "symbol": "VGXUSDT",
    "price": "0.01800000"
  },
  {
    "symbol": "GALAETH",
    "price": "0.00000759"
  },
  {
    "symbol": "JASMYUSDT",
    "price": "0.01825000"
  },
  {
    "symbol": "JASMYBUSD",
    "price": "0.00359300"
  },
  {
    "symbol": "JASMYBNB",
    "price": "0.00001767"
  },
  {
    "symbol": "JASMYBTC",
    "price": "0.00000017"
  },
  {
    "symbol": "AMPBTC",
    "price": "0.00000010"
  },
  {
    "symbol": "AMPBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "AMPBUSD",
    "price": "0.00142900"
  },
  {
    "symbol": "AMPUSDT",
    "price": "0.00467400"
  },
  {
    "symbol": "PLABTC",
    "price": "0.00000465"
  },
  {
    "symbol": "PLABNB",
    "price": "0.00069680"
  },
  {
    "symbol": "PLABUSD",
    "price": "0.14770000"
  },
  {
    "symbol": "PLAUSDT",
    "price": "0.23470000"
  },
  {
    "symbol": "PYRBTC",
    "price": "0.00001947"
  },
  {
    "symbol": "PYRBUSD",
    "price": "3.90300000"
  },
  {
    "symbol": "PYRUSDT",
    "price": "1.79600000"
  },
  {
    "symbol": "RNDRBTC",
    "price": "0.00010320"
  },
  {
    "symbol": "RNDRUSDT",
    "price": "7.03000000"
  },
  {
    "symbol": "RNDRBUSD",
    "price": "3.04000000"
  },
  {
    "symbol": "ALCXBTC",
    "price": "0.00023730"
  },
  {
    "symbol": "ALCXBUSD",
    "price": "10.73000000"
  },
  {
    "symbol": "ALCXUSDT",
    "price": "11.34000000"
  },
  {
    "symbol": "SANTOSBTC",
    "price": "0.00002472"
  },
  {
    "symbol": "SANTOSUSDT",
    "price": "2.27800000"
  },
  {
    "symbol": "SANTOSBRL",
    "price": "20.00000000"
  },
  {
    "symbol": "SANTOSTRY",
    "price": "83.24000000"
  },
  {
    "symbol": "MCBTC",
    "price": "0.00001400"
  },
  {
    "symbol": "MCBUSD",
    "price": "0.26570000"
  },
  {
    "symbol": "MCUSDT",
    "price": "0.48610000"
  },
  {
    "symbol": "BELTRY",
    "price": "33.80000000"
  },
  {
    "symbol": "COCOSBUSD",
    "price": "1.75890000"
  },
  {
    "symbol": "DENTTRY",
    "price": "0.03070000"
  },
  {
    "symbol": "ENJTRY",
    "price": "3.92100000"
  },
  {
    "symbol": "NEORUB",
    "price": "734.00000000"
  },
  {
    "symbol": "SANDAUD",
    "price": "0.63590000"
  },
  {
    "symbol": "SLPBIDR",
    "price": "32.30"
  },
  {
    "symbol": "ANYBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "ANYBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "ANYUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "BICOBTC",
    "price": "0.00000166"
  },
  {
    "symbol": "BICOBUSD",
    "price": "0.25140000"
  },
  {
    "symbol": "BICOUSDT",
    "price": "0.15280000"
  },
  {
    "symbol": "FLUXBTC",
    "price": "0.00000374"
  },
  {
    "symbol": "FLUXBUSD",
    "price": "0.32650000"
  },
  {
    "symbol": "FLUXUSDT",
    "price": "0.34340000"
  },
  {
    "symbol": "ALICETRY",
    "price": "22.54000000"
  },
  {
    "symbol": "FXSUSDT",
    "price": "1.62100000"
  },
  {
    "symbol": "GALABRL",
    "price": "0.10880000"
  },
  {
    "symbol": "GALATRY",
    "price": "0.69600000"
  },
  {
    "symbol": "LUNATRY",
    "price": "7.96000000"
  },
  {
    "symbol": "REQBUSD",
    "price": "0.06330000"
  },
  {
    "symbol": "SANDBRL",
    "price": "1.80700000"
  },
  {
    "symbol": "MANABIDR",
    "price": "10781.00"
  },
  {
    "symbol": "SANDBIDR",
    "price": "6598.00"
  },
  {
    "symbol": "VOXELBTC",
    "price": "0.00000216"
  },
  {
    "symbol": "VOXELBNB",
    "price": "0.00069340"
  },
  {
    "symbol": "VOXELBUSD",
    "price": "0.13250000"
  },
  {
    "symbol": "VOXELUSDT",
    "price": "0.09550000"
  },
  {
    "symbol": "COSBUSD",
    "price": "0.00517000"
  },
  {
    "symbol": "CTXCBUSD",
    "price": "0.11500000"
  },
  {
    "symbol": "FTMTRY",
    "price": "24.82000000"
  },
  {
    "symbol": "MANABNB",
    "price": "0.00155000"
  },
  {
    "symbol": "MINATRY",
    "price": "11.20000000"
  },
  {
    "symbol": "XTZTRY",
    "price": "29.03000000"
  },
  {
    "symbol": "HIGHBTC",
    "price": "0.00001415"
  },
  {
    "symbol": "HIGHBUSD",
    "price": "1.42100000"
  },
  {
    "symbol": "HIGHUSDT",
    "price": "0.86400000"
  },
  {
    "symbol": "CVXBTC",
    "price": "0.00008550"
  },
  {
    "symbol": "CVXBUSD",
    "price": "2.59700000"
  },
  {
    "symbol": "CVXUSDT",
    "price": "2.31400000"
  },
  {
    "symbol": "PEOPLEBTC",
    "price": "0.00000019"
  },
  {
    "symbol": "PEOPLEBUSD",
    "price": "0.00950000"
  },
  {
    "symbol": "PEOPLEUSDT",
    "price": "0.01756000"
  },
  {
    "symbol": "OOKIBUSD",
    "price": "0.00162900"
  },
  {
    "symbol": "OOKIUSDT",
    "price": "0.00011900"
  },
  {
    "symbol": "COCOSTRY",
    "price": "36.66000000"
  },
  {
    "symbol": "GXSBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "LINKBNB",
    "price": "0.02488000"
  },
  {
    "symbol": "LUNAETH",
    "price": "0.00000000"
  },
  {
    "symbol": "MDTBUSD",
    "price": "0.04578000"
  },
  {
    "symbol": "NULSBUSD",
    "price": "0.17850000"
  },
  {
    "symbol": "SPELLBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "SPELLUSDT",
    "price": "0.00076150"
  },
  {
    "symbol": "SPELLBUSD",
    "price": "0.00039730"
  },
  {
    "symbol": "USTBTC",
    "price": "0.00000000"
  },
  {
    "symbol": "USTBUSD",
    "price": "0.00000000"
  },
  {
    "symbol": "USTUSDT",
    "price": "0.00000000"
  },
  {
    "symbol": "JOEBTC",
    "price": "0.00000229"
  },
  {
    "symbol": "JOEBUSD",
    "price": "0.21880000"
  },
  {
    "symbol": "JOEUSDT",
    "price": "0.21230000"
  },
  {
    "symbol": "ATOMETH",
    "price": "0.00173200"
  },
  {
    "symbol": "DUSKBUSD",
    "price": "0.14310000"
  },
  {
    "symbol": "EGLDETH",
    "price": "0.00817000"
  },
  {
    "symbol": "ICPETH",
    "price": "0.00252500"
  },
  {
    "symbol": "LUNABRL",
    "price": "0.00000000"
  },
  {
    "symbol": "LUNAUST",
    "price": "0.00000000"
  },
  {
    "symbol": "NEARETH",
    "price": "0.00121400"
  },
  {
    "symbol": "ROSEBNB",
    "price": "0.00015340"
  },
  {
    "symbol": "VOXELETH",
    "price": "0.00020220"
  },
  {
    "symbol": "ALICEBNB",
    "price": "0.00524000"
  },
  {
    "symbol": "ATOMTRY",
    "price": "158.60000000"
  },
  {
    "symbol": "ETHUST",
    "price": "0.00000000"
  },
  {
    "symbol": "GALAAUD",
    "price": "0.03960000"
  },
  {
    "symbol": "LRCBNB",
    "price": "0.00083900"
  },
  {
    "symbol": "ONEETH",
    "price": "0.00000617"
  },
  {
    "symbol": "OOKIBNB",
    "price": "0.00001491"
  },
  {
    "symbol": "ACHBTC",
    "price": "0.00000031"
  },
  {
    "symbol": "ACHBUSD",
    "price": "0.01646000"
  },
  {
    "symbol": "ACHUSDT",
    "price": "0.02849000"
  },
  {
    "symbol": "IMXBTC",
    "price": "0.00000696"
  },
  {
    "symbol": "IMXBUSD",
    "price": "0.65080000"
  },
  {
    "symbol": "IMXUSDT",
    "price": "0.64100000"
  },
  {
    "symbol": "GLMRBTC",
    "price": "0.00000120"
  },
  {
    "symbol": "GLMRBUSD",
    "price": "0.20650000"
  },
  {
    "symbol": "GLMRUSDT",
    "price": "0.11190000"
  },
  {
    "symbol": "ATOMBIDR",
    "price": "0.00"
  },
  {
    "symbol": "DYDXETH",
    "price": "0.00000000"
  },
  {
    "symbol": "FARMETH",
    "price": "0.00000000"
  },
  {
    "symbol": "FORBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ICPTRY",
    "price": "230.70000000"
  },
  {
    "symbol": "JASMYETH",
    "price": "0.00000302"
  },
  {
    "symbol": "LINABNB",
    "price": "0.00000000"
  },
  {
    "symbol": "OOKIETH",
    "price": "0.00000251"
  },
  {
    "symbol": "ROSEETH",
    "price": "0.00001484"
  },
  {
    "symbol": "UMABUSD",
    "price": "1.32700000"
  },
  {
    "symbol": "UNIETH",
    "price": "0.00315700"
  },
  {
    "symbol": "XTZETH",
    "price": "0.00044000"
  },
  {
    "symbol": "LOKABTC",
    "price": "0.00000132"
  },
  {
    "symbol": "LOKABNB",
    "price": "0.00104270"
  },
  {
    "symbol": "LOKABUSD",
    "price": "0.18490000"
  },
  {
    "symbol": "LOKAUSDT",
    "price": "0.12150000"
  },
  {
    "symbol": "ATOMBRL",
    "price": "66.35000000"
  },
  {
    "symbol": "BNBUST",
    "price": "0.00000000"
  },
  {
    "symbol": "CRVETH",
    "price": "0.00020780"
  },
  {
    "symbol": "HIGHBNB",
    "price": "0.00455700"
  },
  {
    "symbol": "NEARRUB",
    "price": "183.40000000"
  },
  {
    "symbol": "ROSETRY",
    "price": "1.36300000"
  },
  {
    "symbol": "SCRTUSDT",
    "price": "0.21740000"
  },
  {
    "symbol": "API3BTC",
    "price": "0.00000817"
  },
  {
    "symbol": "API3BUSD",
    "price": "1.00000000"
  },
  {
    "symbol": "API3USDT",
    "price": "0.75200000"
  },
  {
    "symbol": "BTTCUSDT",
    "price": "0.00000075"
  },
  {
    "symbol": "BTTCUSDC",
    "price": "0.00000078"
  },
  {
    "symbol": "BTTCTRY",
    "price": "0.00002750"
  },
  {
    "symbol": "ACABTC",
    "price": "0.00000048"
  },
  {
    "symbol": "ACABUSD",
    "price": "0.04640000"
  },
  {
    "symbol": "ACAUSDT",
    "price": "0.04450000"
  },
  {
    "symbol": "ANCBTC",
    "price": "0.00000186"
  },
  {
    "symbol": "ANCBUSD",
    "price": "0.02872000"
  },
  {
    "symbol": "ANCUSDT",
    "price": "0.03151000"
  },
  {
    "symbol": "BDOTDOT",
    "price": "0.99820000"
  },
  {
    "symbol": "XNOBTC",
    "price": "0.00001172"
  },
  {
    "symbol": "XNOETH",
    "price": "0.00050170"
  },
  {
    "symbol": "XNOBUSD",
    "price": "0.66300000"
  },
  {
    "symbol": "XNOUSDT",
    "price": "1.07800000"
  },
  {
    "symbol": "COSTRY",
    "price": "0.16060000"
  },
  {
    "symbol": "KAVAETH",
    "price": "0.00030660"
  },
  {
    "symbol": "MCBNB",
    "price": "0.00069800"
  },
  {
    "symbol": "ONETRY",
    "price": "0.51200000"
  },
  {
    "symbol": "WOOBTC",
    "price": "0.00000116"
  },
  {
    "symbol": "WOOBNB",
    "price": "0.00114100"
  },
  {
    "symbol": "WOOBUSD",
    "price": "0.16450000"
  },
  {
    "symbol": "WOOUSDT",
    "price": "0.10730000"
  },
  {
    "symbol": "CELRETH",
    "price": "0.00000789"
  },
  {
    "symbol": "PEOPLEBNB",
    "price": "0.00004675"
  },
  {
    "symbol": "SLPBNB",
    "price": "0.00000884"
  },
  {
    "symbol": "SPELLBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "SPELLTRY",
    "price": "0.02781000"
  },
  {
    "symbol": "TFUELBUSD",
    "price": "0.04390000"
  },
  {
    "symbol": "AXSTRY",
    "price": "132.90000000"
  },
  {
    "symbol": "DARTRY",
    "price": "7.66600000"
  },
  {
    "symbol": "NEARTRY",
    "price": "111.20000000"
  },
  {
    "symbol": "IDEXBNB",
    "price": "0.00019820"
  },
  {
    "symbol": "ALPINEEUR",
    "price": "2.19600000"
  },
  {
    "symbol": "ALPINETRY",
    "price": "35.44000000"
  },
  {
    "symbol": "ALPINEUSDT",
    "price": "0.97200000"
  },
  {
    "symbol": "ALPINEBTC",
    "price": "0.00002994"
  },
  {
    "symbol": "TUSDT",
    "price": "0.01926000"
  },
  {
    "symbol": "TBUSD",
    "price": "0.02312000"
  },
  {
    "symbol": "API3BNB",
    "price": "0.00000000"
  },
  {
    "symbol": "BETAETH",
    "price": "0.00003349"
  },
  {
    "symbol": "INJTRY",
    "price": "505.40000000"
  },
  {
    "symbol": "TLMBNB",
    "price": "0.00000000"
  },
  {
    "symbol": "ASTRBUSD",
    "price": "0.05000000"
  },
  {
    "symbol": "ASTRUSDT",
    "price": "0.03850000"
  },
  {
    "symbol": "API3TRY",
    "price": "27.40000000"
  },
  {
    "symbol": "GLMRBNB",
    "price": "0.00102100"
  },
  {
    "symbol": "MBOXTRY",
    "price": "4.06300000"
  },
  {
    "symbol": "NBTBIDR",
    "price": "39.10"
  },
  {
    "symbol": "NBTUSDT",
    "price": "0.00252000"
  },
  {
    "symbol": "GMTBTC",
    "price": "0.00000063"
  },
  {
    "symbol": "GMTBNB",
    "price": "0.00076900"
  },
  {
    "symbol": "GMTBUSD",
    "price": "0.22700000"
  },
  {
    "symbol": "GMTUSDT",
    "price": "0.05790000"
  },
  {
    "symbol": "ANCBNB",
    "price": "0.00012880"
  },
  {
    "symbol": "ATOMEUR",
    "price": "4.16700000"
  },
  {
    "symbol": "GALAEUR",
    "price": "0.01821000"
  },
  {
    "symbol": "KSMETH",
    "price": "0.02114000"
  },
  {
    "symbol": "UMATRY",
    "price": "54.02000000"
  },
  {
    "symbol": "KDABTC",
    "price": "0.00000522"
  },
  {
    "symbol": "KDABUSD",
    "price": "0.42000000"
  },
  {
    "symbol": "KDAUSDT",
    "price": "0.47990000"
  },
  {
    "symbol": "APEUSDT",
    "price": "0.58600000"
  },
  {
    "symbol": "APEBUSD",
    "price": "1.42300000"
  },
  {
    "symbol": "APEBTC",
    "price": "0.00000637"
  },
  {
    "symbol": "ALPINEBUSD",
    "price": "1.74900000"
  },
  {
    "symbol": "LUNAGBP",
    "price": "0.00000000"
  },
  {
    "symbol": "NEAREUR",
    "price": "2.89800000"
  },
  {
    "symbol": "TWTTRY",
    "price": "35.25000000"
  },
  {
    "symbol": "WAVESEUR",
    "price": "1.35400000"
  },
  {
    "symbol": "APEEUR",
    "price": "1.50800000"
  },
  {
    "symbol": "APEGBP",
    "price": "3.30500000"
  },
  {
    "symbol": "APETRY",
    "price": "21.44000000"
  },
  {
    "symbol": "BSWUSDT",
    "price": "0.03910000"
  },
  {
    "symbol": "BSWBUSD",
    "price": "0.06700000"
  },
  {
    "symbol": "BSWBNB",
    "price": "0.00029870"
  },
  {
    "symbol": "APEBNB",
    "price": "0.00527700"
  },
  {
    "symbol": "GMTBRL",
    "price": "1.32500000"
  },
  {
    "symbol": "GMTETH",
    "price": "0.00010150"
  },
  {
    "symbol": "JASMYTRY",
    "price": "0.66600000"
  },
  {
    "symbol": "SANTOSBUSD",
    "price": "2.91700000"
  },
  {
    "symbol": "APEAUD",
    "price": "4.07200000"
  },
  {
    "symbol": "BIFIUSDT",
    "price": "225.10000000"
  },
  {
    "symbol": "GMTEUR",
    "price": "0.05520000"
  },
  {
    "symbol": "IMXBNB",
    "price": "0.00236200"
  },
  {
    "symbol": "RUNEETH",
    "price": "0.00055770"
  },
  {
    "symbol": "AVAXGBP",
    "price": "14.18000000"
  },
  {
    "symbol": "MULTIBTC",
    "price": "0.00003673"
  },
  {
    "symbol": "MULTIBUSD",
    "price": "2.09700000"
  },
  {
    "symbol": "MULTIUSDT",
    "price": "0.83400000"
  },
  {
    "symbol": "APEETH",
    "price": "0.00029190"
  },
  {
    "symbol": "BSWETH",
    "price": "0.00013660"
  },
  {
    "symbol": "FILTRY",
    "price": "110.49000000"
  },
  {
    "symbol": "FTMEUR",
    "price": "0.68090000"
  },
  {
    "symbol": "GMTGBP",
    "price": "0.21070000"
  },
  {
    "symbol": "ZILTRY",
    "price": "0.47950000"
  },
  {
    "symbol": "GMTTRY",
    "price": "2.11900000"
  },
  {
    "symbol": "WAVESTRY",
    "price": "36.02000000"
  },
  {
    "symbol": "BTCUST",
    "price": "0.00000000"
  },
  {
    "symbol": "ASTRBTC",
    "price": "0.00000042"
  },
  {
    "symbol": "ASTRETH",
    "price": "0.00003108"
  },
  {
    "symbol": "BSWTRY",
    "price": "1.42500000"
  },
  {
    "symbol": "FTTETH",
    "price": "0.00114100"
  },
  {
    "symbol": "FUNBNB",
    "price": "0.00001888"
  },
  {
    "symbol": "PORTOBUSD",
    "price": "1.75700000"
  },
  {
    "symbol": "STEEMUSDT",
    "price": "0.15460000"
  },
  {
    "symbol": "ZILEUR",
    "price": "0.02063000"
  },
  {
    "symbol": "APEBRL",
    "price": "22.16000000"
  },
  {
    "symbol": "AUDIOTRY",
    "price": "3.21200000"
  },
  {
    "symbol": "BTTCBUSD",
    "price": "0.00000045"
  },
  {
    "symbol": "GMTAUD",
    "price": "0.56950000"
  },
  {
    "symbol": "MBLBUSD",
    "price": "0.00265800"
  },
  {
    "symbol": "MOBUSDT",
    "price": "0.06230000"
  },
  {
    "symbol": "MOBBUSD",
    "price": "0.55000000"
  },
  {
    "symbol": "MOBBTC",
    "price": "0.00000094"
  },
  {
    "symbol": "NEXOUSDT",
    "price": "1.26200000"
  },
  {
    "symbol": "NEXOBUSD",
    "price": "0.62700000"
  },
  {
    "symbol": "NEXOBTC",
    "price": "0.00001371"
  },
  {
    "symbol": "REIUSDT",
    "price": "0.03156000"
  },
  {
    "symbol": "REIBNB",
    "price": "0.00008210"
  },
  {
    "symbol": "REIETH",
    "price": "0.00001928"
  },
  {
    "symbol": "GALUSDT",
    "price": "2.54200000"
  },
  {
    "symbol": "GALBUSD",
    "price": "1.35100000"
  },
  {
    "symbol": "GALBNB",
    "price": "0.00489300"
  },
  {
    "symbol": "GALBTC",
    "price": "0.00004073"
  },
  {
    "symbol": "JASMYEUR",
    "price": "0.00456800"
  },
  {
    "symbol": "KNCBNB",
    "price": "0.00255000"
  },
  {
    "symbol": "SHIBGBP",
    "price": "0.00000696"
  },
  {
    "symbol": "GALEUR",
    "price": "0.99500000"
  },
  {
    "symbol": "GALTRY",
    "price": "84.24000000"
  },
  {
    "symbol": "LDOBUSD",
    "price": "1.74400000"
  },
  {
    "symbol": "LDOUSDT",
    "price": "1.39100000"
  },
  {
    "symbol": "LDOBTC",
    "price": "0.00001514"
  },
  {
    "symbol": "ENSTRY",
    "price": "861.10000000"
  },
  {
    "symbol": "DAREUR",
    "price": "0.12133000"
  },
  {
    "symbol": "DARETH",
    "price": "0.00010140"
  },
  {
    "symbol": "ALGOETH",
    "price": "0.00004447"
  },
  {
    "symbol": "ALGOTRY",
    "price": "8.31000000"
  },
  {
    "symbol": "GALETH",
    "price": "0.00076200"
  },
  {
    "symbol": "EPXUSDT",
    "price": "0.00001940"
  },
  {
    "symbol": "EPXBUSD",
    "price": "0.00016980"
  },
  {
    "symbol": "RUNETRY",
    "price": "31.38000000"
  },
  {
    "symbol": "GALBRL",
    "price": "8.68000000"
  },
  {
    "symbol": "STEEMBUSD",
    "price": "0.18470000"
  },
  {
    "symbol": "CVCBUSD",
    "price": "0.06880000"
  },
  {
    "symbol": "REIBUSD",
    "price": "0.03079000"
  },
  {
    "symbol": "DREPBUSD",
    "price": "0.25360000"
  },
  {
    "symbol": "AKROBUSD",
    "price": "0.00618000"
  },
  {
    "symbol": "PUNDIXBUSD",
    "price": "0.33360000"
  },
  {
    "symbol": "LUNCBUSD",
    "price": "0.00017100"
  },
  {
    "symbol": "USTCBUSD",
    "price": "0.01326580"
  },
  {
    "symbol": "OPBTC",
    "price": "0.00001098"
  },
  {
    "symbol": "OPBUSD",
    "price": "1.80300000"
  },
  {
    "symbol": "OPUSDT",
    "price": "1.01100000"
  },
  {
    "symbol": "OGBUSD",
    "price": "4.41600000"
  },
  {
    "symbol": "KEYBUSD",
    "price": "0.00543000"
  },
  {
    "symbol": "ASRBUSD",
    "price": "2.15900000"
  },
  {
    "symbol": "FIROBUSD",
    "price": "1.44100000"
  },
  {
    "symbol": "NKNBUSD",
    "price": "0.09720000"
  },
  {
    "symbol": "OPBNB",
    "price": "0.00281800"
  },
  {
    "symbol": "OPEUR",
    "price": "0.96800000"
  },
  {
    "symbol": "GTOBUSD",
    "price": "0.02863000"
  },
  {
    "symbol": "SNXETH",
    "price": "0.00076800"
  },
  {
    "symbol": "WBTCBUSD",
    "price": "40760.13000000"
  },
  {
    "symbol": "BELETH",
    "price": "0.00041170"
  },
  {
    "symbol": "LITETH",
    "price": "0.00035510"
  },
  {
    "symbol": "LEVERUSDT",
    "price": "0.00119600"
  },
  {
    "symbol": "LEVERBUSD",
    "price": "0.00130800"
  },
  {
    "symbol": "BURGERETH",
    "price": "0.00045000"
  },
  {
    "symbol": "PEOPLEETH",
    "price": "0.00000668"
  },
  {
    "symbol": "UNFIETH",
    "price": "0.00224100"
  },
  {
    "symbol": "BONDETH",
    "price": "0.00266500"
  },
  {
    "symbol": "STORJTRY",
    "price": "12.12000000"
  },
  {
    "symbol": "OPETH",
    "price": "0.00040300"
  },
  {
    "symbol": "ETCTRY",
    "price": "679.60000000"
  },
  {
    "symbol": "WINGETH",
    "price": "0.00352100"
  },
  {
    "symbol": "FILETH",
    "price": "0.00120800"
  },
  {
    "symbol": "GLMBUSD",
    "price": "0.17860000"
  },
  {
    "symbol": "SSVBUSD",
    "price": "15.74000000"
  },
  {
    "symbol": "STGBTC",
    "price": "0.00000268"
  },
  {
    "symbol": "STGBUSD",
    "price": "0.41400000"
  },
  {
    "symbol": "STGUSDT",
    "price": "0.24670000"
  },
  {
    "symbol": "ANKRTRY",
    "price": "0.77110000"
  },
  {
    "symbol": "ARKBUSD",
    "price": "0.53560000"
  },
  {
    "symbol": "BETHBUSD",
    "price": "1551.73000000"
  },
  {
    "symbol": "LOOMBUSD",
    "price": "0.04003000"
  },
  {
    "symbol": "SNMBUSD",
    "price": "0.01470000"
  },
  {
    "symbol": "AMBBUSD",
    "price": "0.00796000"
  },
  {
    "symbol": "LUNCUSDT",
    "price": "0.00006620"
  },
  {
    "symbol": "PHBBUSD",
    "price": "0.65880000"
  },
  {
    "symbol": "GASBUSD",
    "price": "9.21600000"
  },
  {
    "symbol": "NEBLBUSD",
    "price": "0.35400000"
  },
  {
    "symbol": "PROSBUSD",
    "price": "0.31500000"
  },
  {
    "symbol": "VIBBUSD",
    "price": "0.04217000"
  },
  {
    "symbol": "GMXBTC",
    "price": "0.00033200"
  },
  {
    "symbol": "GMXBUSD",
    "price": "31.67000000"
  },
  {
    "symbol": "GMXUSDT",
    "price": "18.06000000"
  },
  {
    "symbol": "AGIXBUSD",
    "price": "0.29947000"
  },
  {
    "symbol": "NEBLUSDT",
    "price": "0.35500000"
  },
  {
    "symbol": "SNTBUSD",
    "price": "0.02283000"
  },
  {
    "symbol": "POLYXBTC",
    "price": "0.00000175"
  },
  {
    "symbol": "POLYXBUSD",
    "price": "0.12170000"
  },
  {
    "symbol": "POLYXUSDT",
    "price": "0.16100000"
  },
  {
    "symbol": "APTBTC",
    "price": "0.00005890"
  },
  {
    "symbol": "APTUSDT",
    "price": "5.42000000"
  },
  {
    "symbol": "APTBUSD",
    "price": "7.31980000"
  },
  {
    "symbol": "BTCPLN",
    "price": "367194.00000000"
  },
  {
    "symbol": "ETHPLN",
    "price": "10012.00000000"
  },
  {
    "symbol": "BUSDPLN",
    "price": "4.06500000"
  },
  {
    "symbol": "APTEUR",
    "price": "5.17000000"
  },
  {
    "symbol": "APTTRY",
    "price": "197.60000000"
  },
  {
    "symbol": "APTBRL",
    "price": "39.76000000"
  },
  {
    "symbol": "QKCBUSD",
    "price": "0.00869500"
  },
  {
    "symbol": "OSMOBTC",
    "price": "0.00000884"
  },
  {
    "symbol": "OSMOUSDT",
    "price": "0.30600000"
  },
  {
    "symbol": "OSMOBUSD",
    "price": "0.46400000"
  },
  {
    "symbol": "HFTBTC",
    "price": "0.00000089"
  },
  {
    "symbol": "HFTBUSD",
    "price": "0.25890000"
  },
  {
    "symbol": "HFTUSDT",
    "price": "0.08250000"
  },
  {
    "symbol": "ARPAETH",
    "price": "0.00002363"
  },
  {
    "symbol": "PHBUSDT",
    "price": "0.78600000"
  },
  {
    "symbol": "VITEBUSD",
    "price": "0.01726000"
  },
  {
    "symbol": "HOOKBTC",
    "price": "0.00000788"
  },
  {
    "symbol": "HOOKUSDT",
    "price": "0.18020000"
  },
  {
    "symbol": "HOOKBUSD",
    "price": "0.89410000"
  },
  {
    "symbol": "HOOKBNB",
    "price": "0.00319530"
  },
  {
    "symbol": "MAGICBTC",
    "price": "0.00000221"
  },
  {
    "symbol": "MAGICBUSD",
    "price": "0.55850000"
  },
  {
    "symbol": "MAGICUSDT",
    "price": "0.20470000"
  },
  {
    "symbol": "BUSDRON",
    "price": "4.62800000"
  },
  {
    "symbol": "HIFIETH",
    "price": "0.00025310"
  },
  {
    "symbol": "HIFIUSDT",
    "price": "0.40160000"
  },
  {
    "symbol": "RPLBTC",
    "price": "0.00064100"
  },
  {
    "symbol": "RPLBUSD",
    "price": "24.17000000"
  },
  {
    "symbol": "RPLUSDT",
    "price": "6.37000000"
  },
  {
    "symbol": "PROSUSDT",
    "price": "0.35700000"
  },
  {
    "symbol": "FETTRY",
    "price": "24.53000000"
  },
  {
    "symbol": "GFTBUSD",
    "price": "0.02911000"
  },
  {
    "symbol": "AGIXUSDT",
    "price": "0.61410000"
  },
  {
    "symbol": "APTETH",
    "price": "0.00216100"
  },
  {
    "symbol": "BTCRON",
    "price": "434809.00000000"
  },
  {
    "symbol": "GNSUSDT",
    "price": "1.52400000"
  },
  {
    "symbol": "GNSBTC",
    "price": "0.00007210"
  },
  {
    "symbol": "SYNBTC",
    "price": "0.00001152"
  },
  {
    "symbol": "SYNUSDT",
    "price": "0.29880000"
  },
  {
    "symbol": "VIBUSDT",
    "price": "0.05219000"
  },
  {
    "symbol": "SSVUSDT",
    "price": "10.47000000"
  },
  {
    "symbol": "LQTYUSDT",
    "price": "0.80400000"
  },
  {
    "symbol": "LQTYBTC",
    "price": "0.00000869"
  },
  {
    "symbol": "AMBUSDT",
    "price": "0.00032000"
  },
  {
    "symbol": "BETHUSDT",
    "price": "1556.27000000"
  },
  {
    "symbol": "CFXTRY",
    "price": "4.08600000"
  },
  {
    "symbol": "STXTRY",
    "price": "28.10000000"
  },
  {
    "symbol": "USTCUSDT",
    "price": "0.01434000"
  },
  {
    "symbol": "GASUSDT",
    "price": "3.48100000"
  },
  {
    "symbol": "GLMUSDT",
    "price": "0.33090000"
  },
  {
    "symbol": "PROMUSDT",
    "price": "6.60000000"
  },
  {
    "symbol": "QKCUSDT",
    "price": "0.00779700"
  },
  {
    "symbol": "UFTUSDT",
    "price": "0.14850000"
  },
  {
    "symbol": "IDBTC",
    "price": "0.00000292"
  },
  {
    "symbol": "IDBNB",
    "price": "0.00094930"
  },
  {
    "symbol": "IDUSDT",
    "price": "0.26980000"
  },
  {
    "symbol": "ARBBTC",
    "price": "0.00000442"
  },
  {
    "symbol": "ARBUSDT",
    "price": "0.40680000"
  },
  {
    "symbol": "AGIXTRY",
    "price": "20.14000000"
  },
  {
    "symbol": "LOOMUSDT",
    "price": "0.04831000"
  },
  {
    "symbol": "OAXUSDT",
    "price": "0.03580000"
  },
  {
    "symbol": "ARBTUSD",
    "price": "0.40600000"
  },
  {
    "symbol": "ARBTRY",
    "price": "14.84000000"
  },
  {
    "symbol": "ARBEUR",
    "price": "0.38850000"
  },
  {
    "symbol": "IDTUSD",
    "price": "0.88208000"
  },
  {
    "symbol": "IDTRY",
    "price": "9.85000000"
  },
  {
    "symbol": "IDEUR",
    "price": "0.18769000"
  },
  {
    "symbol": "LDOTUSD",
    "price": "2.46700000"
  },
  {
    "symbol": "MATICTUSD",
    "price": "0.50430000"
  },
  {
    "symbol": "OPTUSD",
    "price": "2.99700000"
  },
  {
    "symbol": "SOLTUSD",
    "price": "140.82000000"
  },
  {
    "symbol": "SSVTUSD",
    "price": "45.55000000"
  },
  {
    "symbol": "RDNTBTC",
    "price": "0.00000107"
  },
  {
    "symbol": "RDNTUSDT",
    "price": "0.02880000"
  },
  {
    "symbol": "RDNTTUSD",
    "price": "0.30100000"
  },
  {
    "symbol": "ARBRUB",
    "price": "95.10000000"
  },
  {
    "symbol": "JOETRY",
    "price": "12.22000000"
  },
  {
    "symbol": "MAGICTRY",
    "price": "7.44000000"
  },
  {
    "symbol": "USDTPLN",
    "price": "3.99400000"
  },
  {
    "symbol": "ACHTRY",
    "price": "1.04010000"
  },
  {
    "symbol": "XVSTRY",
    "price": "273.30000000"
  },
  {
    "symbol": "EGLDRON",
    "price": "96.60000000"
  },
  {
    "symbol": "USDTRON",
    "price": "4.73600000"
  },
  {
    "symbol": "USDTARS",
    "price": "1226.50000000"
  },
  {
    "symbol": "DOGETUSD",
    "price": "0.21233000"
  },
  {
    "symbol": "WBTCUSDT",
    "price": "91940.76000000"
  },
  {
    "symbol": "EDUUSDT",
    "price": "0.23050000"
  },
  {
    "symbol": "EDUTUSD",
    "price": "1.06098000"
  },
  {
    "symbol": "EDUBNB",
    "price": "0.00181050"
  },
  {
    "symbol": "EDUBTC",
    "price": "0.00000324"
  },
  {
    "symbol": "EDUEUR",
    "price": "0.47455000"
  },
  {
    "symbol": "EDUTRY",
    "price": "8.39000000"
  },
  {
    "symbol": "SUIUSDT",
    "price": "2.85570000"
  },
  {
    "symbol": "SUITUSD",
    "price": "4.06690000"
  },
  {
    "symbol": "SUIBTC",
    "price": "0.00003106"
  },
  {
    "symbol": "SUIBNB",
    "price": "0.00465900"
  },
  {
    "symbol": "SUIEUR",
    "price": "2.72810000"
  },
  {
    "symbol": "SUITRY",
    "price": "104.48000000"
  },
  {
    "symbol": "AERGOUSDT",
    "price": "0.08530000"
  },
  {
    "symbol": "RNDRTRY",
    "price": "233.63000000"
  },
  {
    "symbol": "PEPEUSDT",
    "price": "0.00000796"
  },
  {
    "symbol": "PEPETUSD",
    "price": "0.00002351"
  },
  {
    "symbol": "FLOKIUSDT",
    "price": "0.00008272"
  },
  {
    "symbol": "FLOKITUSD",
    "price": "0.00003203"
  },
  {
    "symbol": "OGTRY",
    "price": "126.20000000"
  },
  {
    "symbol": "PEPETRY",
    "price": "0.00029099"
  },
  {
    "symbol": "WBETHETH",
    "price": "1.06180000"
  },
  {
    "symbol": "ASTUSDT",
    "price": "0.06560000"
  },
  {
    "symbol": "SNTUSDT",
    "price": "0.02625000"
  },
  {
    "symbol": "FLOKITRY",
    "price": "0.00301900"
  },
  {
    "symbol": "CITYTRY",
    "price": "42.70000000"
  },
  {
    "symbol": "COMBOUSDT",
    "price": "0.27470000"
  },
  {
    "symbol": "COMBOBNB",
    "price": "0.00227200"
  },
  {
    "symbol": "COMBOTRY",
    "price": "10.03000000"
  },
  {
    "symbol": "LTCTRY",
    "price": "4173.00000000"
  },
  {
    "symbol": "RADTRY",
    "price": "29.18000000"
  },
  {
    "symbol": "BTCARS",
    "price": "112699098.00000000"
  },
  {
    "symbol": "OPTRY",
    "price": "36.92000000"
  },
  {
    "symbol": "PAXGTRY",
    "price": "108321.00000000"
  },
  {
    "symbol": "MAVBTC",
    "price": "0.00000084"
  },
  {
    "symbol": "MAVUSDT",
    "price": "0.07780000"
  },
  {
    "symbol": "MAVTUSD",
    "price": "0.21940000"
  },
  {
    "symbol": "CFXTUSD",
    "price": "0.22120000"
  },
  {
    "symbol": "PENDLEBTC",
    "price": "0.00003171"
  },
  {
    "symbol": "PENDLEUSDT",
    "price": "2.92300000"
  },
  {
    "symbol": "PENDLETUSD",
    "price": "2.70440000"
  },
  {
    "symbol": "MAVTRY",
    "price": "2.84000000"
  },
  {
    "symbol": "OCEANTRY",
    "price": "20.10000000"
  },
  {
    "symbol": "TUSDTRY",
    "price": "35.34000000"
  },
  {
    "symbol": "ARBETH",
    "price": "0.00016230"
  },
  {
    "symbol": "BCHTRY",
    "price": "10627.00000000"
  },
  {
    "symbol": "XVGTRY",
    "price": "0.19950000"
  },
  {
    "symbol": "XVGTUSD",
    "price": "0.00626900"
  },
  {
    "symbol": "ARKMUSDT",
    "price": "0.59500000"
  },
  {
    "symbol": "ARKMTUSD",
    "price": "1.15100000"
  },
  {
    "symbol": "ARKMTRY",
    "price": "21.77000000"
  },
  {
    "symbol": "ARKMBNB",
    "price": "0.00097300"
  },
  {
    "symbol": "ARKMBTC",
    "price": "0.00000646"
  },
  {
    "symbol": "WBETHUSDT",
    "price": "2661.67000000"
  },
  {
    "symbol": "ACATRY",
    "price": "1.63300000"
  },
  {
    "symbol": "AVAXTUSD",
    "price": "27.66000000"
  },
  {
    "symbol": "COMPTUSD",
    "price": "84.22000000"
  },
  {
    "symbol": "COMPTRY",
    "price": "1861.00000000"
  },
  {
    "symbol": "XECTRY",
    "price": "0.00085860"
  },
  {
    "symbol": "QUICKTUSD",
    "price": "0.04668000"
  },
  {
    "symbol": "WLDUSDT",
    "price": "1.05000000"
  },
  {
    "symbol": "WLDBTC",
    "price": "0.00001142"
  },
  {
    "symbol": "BNBFDUSD",
    "price": "612.72000000"
  },
  {
    "symbol": "FDUSDBUSD",
    "price": "1.00000000"
  },
  {
    "symbol": "FDUSDUSDT",
    "price": "0.99880000"
  },
  {
    "symbol": "ARKMRUB",
    "price": "40.11000000"
  },
  {
    "symbol": "WLDTRY",
    "price": "38.36000000"
  },
  {
    "symbol": "WLDRUB",
    "price": "218.30000000"
  },
  {
    "symbol": "AMPTRY",
    "price": "0.17080000"
  },
  {
    "symbol": "OGNTRY",
    "price": "2.60000000"
  },
  {
    "symbol": "BTCFDUSD",
    "price": "92076.00000000"
  },
  {
    "symbol": "ETHFDUSD",
    "price": "2508.30000000"
  },
  {
    "symbol": "ASRTRY",
    "price": "49.29000000"
  },
  {
    "symbol": "ATMTRY",
    "price": "51.41000000"
  },
  {
    "symbol": "ACMTRY",
    "price": "55.29000000"
  },
  {
    "symbol": "BARTRY",
    "price": "59.55000000"
  },
  {
    "symbol": "JUVTRY",
    "price": "46.54000000"
  },
  {
    "symbol": "PSGTRY",
    "price": "83.32000000"
  },
  {
    "symbol": "SEIBNB",
    "price": "0.00043040"
  },
  {
    "symbol": "SEIBTC",
    "price": "0.00000286"
  },
  {
    "symbol": "SEIFDUSD",
    "price": "0.26340000"
  },
  {
    "symbol": "SEITRY",
    "price": "9.62600000"
  },
  {
    "symbol": "SEIUSDT",
    "price": "0.26320000"
  },
  {
    "symbol": "CYBERBNB",
    "price": "0.00243100"
  },
  {
    "symbol": "CYBERBTC",
    "price": "0.00001617"
  },
  {
    "symbol": "CYBERFDUSD",
    "price": "1.49600000"
  },
  {
    "symbol": "CYBERTRY",
    "price": "54.50000000"
  },
  {
    "symbol": "CYBERUSDT",
    "price": "1.49600000"
  },
  {
    "symbol": "CYBERTUSD",
    "price": "3.76500000"
  },
  {
    "symbol": "SEITUSD",
    "price": "0.36330000"
  },
  {
    "symbol": "LPTTRY",
    "price": "229.80000000"
  },
  {
    "symbol": "UNITRY",
    "price": "288.90000000"
  },
  {
    "symbol": "SOLFDUSD",
    "price": "141.11000000"
  },
  {
    "symbol": "TOMOTRY",
    "price": "40.26000000"
  },
  {
    "symbol": "UNFITRY",
    "price": "46.10000000"
  },
  {
    "symbol": "XRPFDUSD",
    "price": "2.28930000"
  },
  {
    "symbol": "DOGEFDUSD",
    "price": "0.21229000"
  },
  {
    "symbol": "CYBERETH",
    "price": "0.00059500"
  },
  {
    "symbol": "MTLTRY",
    "price": "38.80000000"
  },
  {
    "symbol": "ARKUSDT",
    "price": "0.42790000"
  },
  {
    "symbol": "CREAMUSDT",
    "price": "6.39000000"
  },
  {
    "symbol": "GFTUSDT",
    "price": "0.00196000"
  },
  {
    "symbol": "IQUSDT",
    "price": "0.00517800"
  },
  {
    "symbol": "USDTVAI",
    "price": "1.01300000"
  },
  {
    "symbol": "ARBFDUSD",
    "price": "0.40750000"
  },
  {
    "symbol": "FDUSDTRY",
    "price": "36.47000000"
  },
  {
    "symbol": "FRONTTRY",
    "price": "30.14000000"
  },
  {
    "symbol": "SUIFDUSD",
    "price": "2.86450000"
  },
  {
    "symbol": "NTRNBTC",
    "price": "0.00000621"
  },
  {
    "symbol": "NTRNUSDT",
    "price": "0.15840000"
  },
  {
    "symbol": "NTRNBNB",
    "price": "0.00025900"
  },
  {
    "symbol": "FILFDUSD",
    "price": "3.03000000"
  },
  {
    "symbol": "FRONTTUSD",
    "price": "0.91380000"
  },
  {
    "symbol": "LEVERTRY",
    "price": "0.04361000"
  },
  {
    "symbol": "LTCFDUSD",
    "price": "114.56000000"
  },
  {
    "symbol": "ADAFDUSD",
    "price": "0.68900000"
  },
  {
    "symbol": "RUNETUSD",
    "price": "5.50100000"
  },
  {
    "symbol": "TRBTRY",
    "price": "1193.00000000"
  },
  {
    "symbol": "ATOMFDUSD",
    "price": "4.35200000"
  },
  {
    "symbol": "AVAXFDUSD",
    "price": "21.98000000"
  },
  {
    "symbol": "BANDTRY",
    "price": "37.91000000"
  },
  {
    "symbol": "BCHFDUSD",
    "price": "294.60000000"
  },
  {
    "symbol": "LOOMTRY",
    "price": "1.65400000"
  },
  {
    "symbol": "MATICFDUSD",
    "price": "0.37950000"
  },
  {
    "symbol": "ALGOFDUSD",
    "price": "0.12140000"
  },
  {
    "symbol": "DOTFDUSD",
    "price": "4.41900000"
  },
  {
    "symbol": "FTMFDUSD",
    "price": "0.70080000"
  },
  {
    "symbol": "LINKFDUSD",
    "price": "15.23000000"
  },
  {
    "symbol": "NEARFDUSD",
    "price": "3.04900000"
  },
  {
    "symbol": "STRAXTRY",
    "price": "1.76700000"
  },
  {
    "symbol": "TIABTC",
    "price": "0.00003460"
  },
  {
    "symbol": "TIAUSDT",
    "price": "3.18200000"
  },
  {
    "symbol": "TIATRY",
    "price": "116.30000000"
  },
  {
    "symbol": "MEMEBNB",
    "price": "0.00004107"
  },
  {
    "symbol": "MEMEUSDT",
    "price": "0.00359000"
  },
  {
    "symbol": "MEMEFDUSD",
    "price": "0.00359000"
  },
  {
    "symbol": "MEMETUSD",
    "price": "0.02722000"
  },
  {
    "symbol": "MEMETRY",
    "price": "0.13100000"
  },
  {
    "symbol": "ORDIBTC",
    "price": "0.00011370"
  },
  {
    "symbol": "ORDIUSDT",
    "price": "10.47000000"
  },
  {
    "symbol": "ORDITRY",
    "price": "383.00000000"
  },
  {
    "symbol": "EGLDFDUSD",
    "price": "20.42000000"
  },
  {
    "symbol": "FETFDUSD",
    "price": "0.67200000"
  },
  {
    "symbol": "GASFDUSD",
    "price": "2.78500000"
  },
  {
    "symbol": "INJETH",
    "price": "0.00551200"
  },
  {
    "symbol": "INJTUSD",
    "price": "26.23000000"
  },
  {
    "symbol": "OPFDUSD",
    "price": "1.01200000"
  },
  {
    "symbol": "ORDIFDUSD",
    "price": "10.46000000"
  },
  {
    "symbol": "ORDITUSD",
    "price": "36.89000000"
  },
  {
    "symbol": "RNDRFDUSD",
    "price": "7.02900000"
  },
  {
    "symbol": "SHIBTUSD",
    "price": "0.00001766"
  },
  {
    "symbol": "BEAMXUSDT",
    "price": "0.00812000"
  },
  {
    "symbol": "ARKTRY",
    "price": "15.64000000"
  },
  {
    "symbol": "BEAMXTRY",
    "price": "0.29650000"
  },
  {
    "symbol": "CAKETRY",
    "price": "79.46000000"
  },
  {
    "symbol": "CAKETUSD",
    "price": "2.77400000"
  },
  {
    "symbol": "DYDXFDUSD",
    "price": "0.67090000"
  },
  {
    "symbol": "PIVXUSDT",
    "price": "0.17160000"
  },
  {
    "symbol": "RUNEFDUSD",
    "price": "1.39900000"
  },
  {
    "symbol": "TIATUSD",
    "price": "6.40000000"
  },
  {
    "symbol": "DOTTUSD",
    "price": "7.09800000"
  },
  {
    "symbol": "GALAFDUSD",
    "price": "0.01919000"
  },
  {
    "symbol": "WLDFDUSD",
    "price": "1.05200000"
  },
  {
    "symbol": "GASTRY",
    "price": "126.30000000"
  },
  {
    "symbol": "NTRNTRY",
    "price": "5.79000000"
  },
  {
    "symbol": "VICBTC",
    "price": "0.00000299"
  },
  {
    "symbol": "VICUSDT",
    "price": "0.27440000"
  },
  {
    "symbol": "VICTRY",
    "price": "10.03000000"
  },
  {
    "symbol": "BLURBTC",
    "price": "0.00000143"
  },
  {
    "symbol": "BLURUSDT",
    "price": "0.13180000"
  },
  {
    "symbol": "BLURTRY",
    "price": "4.81000000"
  },
  {
    "symbol": "BLURFDUSD",
    "price": "0.20900000"
  },
  {
    "symbol": "SUPERFDUSD",
    "price": "0.60120000"
  },
  {
    "symbol": "USTCFDUSD",
    "price": "0.01829000"
  },
  {
    "symbol": "USTCTRY",
    "price": "0.52350000"
  },
  {
    "symbol": "DYDXTRY",
    "price": "24.31000000"
  },
  {
    "symbol": "VANRYUSDT",
    "price": "0.03710000"
  },
  {
    "symbol": "VANRYBTC",
    "price": "0.00000041"
  },
  {
    "symbol": "BTCAEUR",
    "price": "51466.50000000"
  },
  {
    "symbol": "AEURUSDT",
    "price": "0.94960000"
  },
  {
    "symbol": "ETHAEUR",
    "price": "2700.00000000"
  },
  {
    "symbol": "EURAEUR",
    "price": "1.08310000"
  },
  {
    "symbol": "AUCTIONFDUSD",
    "price": "15.51000000"
  },
  {
    "symbol": "IOTAFDUSD",
    "price": "0.14040000"
  },
  {
    "symbol": "LUNCTRY",
    "price": "0.00241800"
  },
  {
    "symbol": "SUPERTRY",
    "price": "21.45000000"
  },
  {
    "symbol": "JTOUSDT",
    "price": "2.48300000"
  },
  {
    "symbol": "JTOFDUSD",
    "price": "2.48900000"
  },
  {
    "symbol": "JTOTRY",
    "price": "90.70000000"
  },
  {
    "symbol": "1000SATSUSDT",
    "price": "0.00012190"
  },
  {
    "symbol": "1000SATSFDUSD",
    "price": "0.00012200"
  },
  {
    "symbol": "1000SATSTRY",
    "price": "0.00445300"
  },
  {
    "symbol": "SHIBFDUSD",
    "price": "0.00001391"
  },
  {
    "symbol": "SANDFDUSD",
    "price": "0.29980000"
  },
  {
    "symbol": "MEMEETH",
    "price": "0.00000576"
  },
  {
    "symbol": "IOTATRY",
    "price": "7.24400000"
  },
  {
    "symbol": "INJFDUSD",
    "price": "13.84000000"
  },
  {
    "symbol": "FIDATRY",
    "price": "4.11700000"
  },
  {
    "symbol": "BONKUSDT",
    "price": "0.00001312"
  },
  {
    "symbol": "BONKFDUSD",
    "price": "0.00001314"
  },
  {
    "symbol": "BONKTRY",
    "price": "0.00047990"
  },
  {
    "symbol": "ACEFDUSD",
    "price": "2.02200000"
  },
  {
    "symbol": "ACEUSDT",
    "price": "0.90100000"
  },
  {
    "symbol": "ACEBNB",
    "price": "0.00894000"
  },
  {
    "symbol": "ACEBTC",
    "price": "0.00002169"
  },
  {
    "symbol": "ACETRY",
    "price": "33.00000000"
  },
  {
    "symbol": "BLZFDUSD",
    "price": "0.12600000"
  },
  {
    "symbol": "RARETRY",
    "price": "2.17600000"
  },
  {
    "symbol": "VANRYTRY",
    "price": "1.35100000"
  },
  {
    "symbol": "NFPBTC",
    "price": "0.00000116"
  },
  {
    "symbol": "NFPUSDT",
    "price": "0.10760000"
  },
  {
    "symbol": "NFPBNB",
    "price": "0.00056200"
  },
  {
    "symbol": "NFPFDUSD",
    "price": "0.10730000"
  },
  {
    "symbol": "NFPTUSD",
    "price": "0.39750000"
  },
  {
    "symbol": "NFPTRY",
    "price": "3.92000000"
  },
  {
    "symbol": "ARBUSDC",
    "price": "0.40680000"
  },
  {
    "symbol": "AVAXUSDC",
    "price": "21.94000000"
  },
  {
    "symbol": "DOTUSDC",
    "price": "4.41500000"
  },
  {
    "symbol": "INJUSDC",
    "price": "13.84000000"
  },
  {
    "symbol": "MATICUSDC",
    "price": "0.37910000"
  },
  {
    "symbol": "OPUSDC",
    "price": "1.01200000"
  },
  {
    "symbol": "ORDIUSDC",
    "price": "10.47000000"
  },
  {
    "symbol": "AIBTC",
    "price": "0.00000247"
  },
  {
    "symbol": "AIUSDT",
    "price": "0.22830000"
  },
  {
    "symbol": "AIBNB",
    "price": "0.00037360"
  },
  {
    "symbol": "AIFDUSD",
    "price": "0.22780000"
  },
  {
    "symbol": "AITUSD",
    "price": "0.51400000"
  },
  {
    "symbol": "AITRY",
    "price": "8.34000000"
  },
  {
    "symbol": "ICPFDUSD",
    "price": "6.32100000"
  },
  {
    "symbol": "LDOFDUSD",
    "price": "1.39200000"
  },
  {
    "symbol": "MOVRTRY",
    "price": "257.40000000"
  },
  {
    "symbol": "XAIBTC",
    "price": "0.00000088"
  },
  {
    "symbol": "XAIUSDT",
    "price": "0.08210000"
  },
  {
    "symbol": "XAIBNB",
    "price": "0.00103800"
  },
  {
    "symbol": "XAIFDUSD",
    "price": "0.08180000"
  },
  {
    "symbol": "XAITUSD",
    "price": "0.89860000"
  },
  {
    "symbol": "XAITRY",
    "price": "3.00000000"
  },
  {
    "symbol": "SKLTRY",
    "price": "1.16300000"
  },
  {
    "symbol": "STXFDUSD",
    "price": "0.77000000"
  },
  {
    "symbol": "TIAFDUSD",
    "price": "3.18300000"
  },
  {
    "symbol": "MANTABTC",
    "price": "0.00000360"
  },
  {
    "symbol": "MANTAUSDT",
    "price": "0.33200000"
  },
  {
    "symbol": "MANTABNB",
    "price": "0.00157000"
  },
  {
    "symbol": "MANTAFDUSD",
    "price": "0.33200000"
  },
  {
    "symbol": "MANTATRY",
    "price": "12.12000000"
  },
  {
    "symbol": "ENSFDUSD",
    "price": "23.54000000"
  },
  {
    "symbol": "ETCFDUSD",
    "price": "18.63000000"
  },
  {
    "symbol": "SUIUSDC",
    "price": "2.85880000"
  },
  {
    "symbol": "TIAUSDC",
    "price": "3.18300000"
  },
  {
    "symbol": "CHZFDUSD",
    "price": "0.08760000"
  },
  {
    "symbol": "MANTAUSDC",
    "price": "0.33300000"
  },
  {
    "symbol": "ALTBTC",
    "price": "0.00000042"
  },
  {
    "symbol": "ALTUSDT",
    "price": "0.03866000"
  },
  {
    "symbol": "ALTBNB",
    "price": "0.00006310"
  },
  {
    "symbol": "ALTFDUSD",
    "price": "0.03871000"
  },
  {
    "symbol": "ALTTRY",
    "price": "1.41300000"
  },
  {
    "symbol": "APTFDUSD",
    "price": "5.42000000"
  },
  {
    "symbol": "BLURUSDC",
    "price": "0.13170000"
  },
  {
    "symbol": "JUPUSDT",
    "price": "0.67770000"
  },
  {
    "symbol": "JUPFDUSD",
    "price": "0.67650000"
  },
  {
    "symbol": "JUPTRY",
    "price": "24.74000000"
  },
  {
    "symbol": "ALTUSDC",
    "price": "0.03869000"
  },
  {
    "symbol": "MAGICFDUSD",
    "price": "0.90500000"
  },
  {
    "symbol": "SEIUSDC",
    "price": "0.26340000"
  },
  {
    "symbol": "PYTHBTC",
    "price": "0.00000221"
  },
  {
    "symbol": "PYTHUSDT",
    "price": "0.20390000"
  },
  {
    "symbol": "PYTHFDUSD",
    "price": "0.20410000"
  },
  {
    "symbol": "PYTHTRY",
    "price": "7.42000000"
  },
  {
    "symbol": "RONINBTC",
    "price": "0.00001134"
  },
  {
    "symbol": "RONINUSDT",
    "price": "1.04300000"
  },
  {
    "symbol": "RONINFDUSD",
    "price": "1.04500000"
  },
  {
    "symbol": "RONINTRY",
    "price": "38.08000000"
  },
  {
    "symbol": "DYMBTC",
    "price": "0.00001452"
  },
  {
    "symbol": "DYMUSDT",
    "price": "0.39200000"
  },
  {
    "symbol": "DYMFDUSD",
    "price": "1.34000000"
  },
  {
    "symbol": "DYMTRY",
    "price": "14.32000000"
  },
  {
    "symbol": "JUPUSDC",
    "price": "0.67870000"
  },
  {
    "symbol": "PENDLEFDUSD",
    "price": "2.92900000"
  },
  {
    "symbol": "PIXELBTC",
    "price": "0.00000146"
  },
  {
    "symbol": "PIXELBNB",
    "price": "0.00022800"
  },
  {
    "symbol": "PIXELUSDT",
    "price": "0.05210000"
  },
  {
    "symbol": "PIXELFDUSD",
    "price": "0.15530000"
  },
  {
    "symbol": "PIXELTRY",
    "price": "1.90300000"
  },
  {
    "symbol": "STRKBTC",
    "price": "0.00000215"
  },
  {
    "symbol": "STRKUSDT",
    "price": "0.19840000"
  },
  {
    "symbol": "STRKFDUSD",
    "price": "0.19840000"
  },
  {
    "symbol": "STRKTRY",
    "price": "7.25000000"
  },
  {
    "symbol": "FILUSDC",
    "price": "3.02700000"
  },
  {
    "symbol": "HBARTRY",
    "price": "7.11300000"
  },
  {
    "symbol": "PENDLETRY",
    "price": "106.80000000"
  },
  {
    "symbol": "WLDUSDC",
    "price": "1.05100000"
  },
  {
    "symbol": "CKBTRY",
    "price": "0.21320000"
  },
  {
    "symbol": "COTITRY",
    "price": "2.64200000"
  },
  {
    "symbol": "LDOTRY",
    "price": "50.78000000"
  },
  {
    "symbol": "UNIUSDC",
    "price": "7.90600000"
  },
  {
    "symbol": "PORTALBTC",
    "price": "0.00000130"
  },
  {
    "symbol": "PORTALUSDT",
    "price": "0.11990000"
  },
  {
    "symbol": "PORTALBNB",
    "price": "0.00019570"
  },
  {
    "symbol": "PORTALFDUSD",
    "price": "0.12020000"
  },
  {
    "symbol": "PORTALTRY",
    "price": "4.37500000"
  },
  {
    "symbol": "PDABTC",
    "price": "0.00000079"
  },
  {
    "symbol": "PDAUSDT",
    "price": "0.02121000"
  },
  {
    "symbol": "AXLBTC",
    "price": "0.00000484"
  },
  {
    "symbol": "AXLUSDT",
    "price": "0.44540000"
  },
  {
    "symbol": "AXLFDUSD",
    "price": "0.61060000"
  },
  {
    "symbol": "AXLTRY",
    "price": "16.27000000"
  },
  {
    "symbol": "PEPEFDUSD",
    "price": "0.00000798"
  },
  {
    "symbol": "PIXELUSDC",
    "price": "0.05190000"
  },
  {
    "symbol": "STRKUSDC",
    "price": "0.19800000"
  },
  {
    "symbol": "UNIFDUSD",
    "price": "7.91900000"
  },
  {
    "symbol": "OMTRY",
    "price": "292.23000000"
  },
  {
    "symbol": "THETATRY",
    "price": "42.19000000"
  },
  {
    "symbol": "WIFBTC",
    "price": "0.00000597"
  },
  {
    "symbol": "WIFUSDT",
    "price": "0.54800000"
  },
  {
    "symbol": "WIFFDUSD",
    "price": "0.55000000"
  },
  {
    "symbol": "WIFTRY",
    "price": "20.04000000"
  },
  {
    "symbol": "AGIXFDUSD",
    "price": "0.61880000"
  },
  {
    "symbol": "PEPEUSDC",
    "price": "0.00000797"
  },
  {
    "symbol": "SHIBUSDC",
    "price": "0.00001388"
  },
  {
    "symbol": "THETAFDUSD",
    "price": "1.15300000"
  },
  {
    "symbol": "ARTRY",
    "price": "287.30000000"
  },
  {
    "symbol": "METISBTC",
    "price": "0.00053900"
  },
  {
    "symbol": "METISUSDT",
    "price": "26.14000000"
  },
  {
    "symbol": "METISFDUSD",
    "price": "49.49000000"
  },
  {
    "symbol": "METISTRY",
    "price": "948.00000000"
  },
  {
    "symbol": "BNBJPY",
    "price": "91736.00000000"
  },
  {
    "symbol": "BTCJPY",
    "price": "13799829.00000000"
  },
  {
    "symbol": "ETHJPY",
    "price": "376081.00000000"
  },
  {
    "symbol": "FLOKIFDUSD",
    "price": "0.00008268"
  },
  {
    "symbol": "GRTFDUSD",
    "price": "0.12060000"
  },
  {
    "symbol": "NEARUSDC",
    "price": "3.04300000"
  },
  {
    "symbol": "SNXTRY",
    "price": "32.75000000"
  },
  {
    "symbol": "AEVOBTC",
    "price": "0.00000143"
  },
  {
    "symbol": "AEVOUSDT",
    "price": "0.13120000"
  },
  {
    "symbol": "AEVOBNB",
    "price": "0.00077700"
  },
  {
    "symbol": "AEVOFDUSD",
    "price": "0.13150000"
  },
  {
    "symbol": "AEVOTRY",
    "price": "4.79000000"
  },
  {
    "symbol": "FETUSDC",
    "price": "0.67300000"
  },
  {
    "symbol": "IMXTRY",
    "price": "38.57000000"
  },
  {
    "symbol": "EURUSDC",
    "price": "1.04710000"
  },
  {
    "symbol": "BOMETRY",
    "price": "0.06260000"
  },
  {
    "symbol": "BOMEBTC",
    "price": "0.00000006"
  },
  {
    "symbol": "BOMEUSDT",
    "price": "0.00171400"
  },
  {
    "symbol": "BOMEFDUSD",
    "price": "0.00171500"
  },
  {
    "symbol": "ETHFIBTC",
    "price": "0.00001027"
  },
  {
    "symbol": "ETHFIUSDT",
    "price": "0.94700000"
  },
  {
    "symbol": "ETHFIBNB",
    "price": "0.00252300"
  },
  {
    "symbol": "ETHFIFDUSD",
    "price": "0.95000000"
  },
  {
    "symbol": "ETHFITRY",
    "price": "34.59000000"
  },
  {
    "symbol": "AAVETRY",
    "price": "7476.00000000"
  },
  {
    "symbol": "ARKMFDUSD",
    "price": "0.59400000"
  },
  {
    "symbol": "CRVTRY",
    "price": "15.86000000"
  },
  {
    "symbol": "FETBRL",
    "price": "4.33000000"
  },
  {
    "symbol": "RAYFDUSD",
    "price": "2.93100000"
  },
  {
    "symbol": "RNDREUR",
    "price": "6.47500000"
  },
  {
    "symbol": "BONKUSDC",
    "price": "0.00001316"
  },
  {
    "symbol": "FLOKIUSDC",
    "price": "0.00008260"
  },
  {
    "symbol": "MKRTRY",
    "price": "50403.00000000"
  },
  {
    "symbol": "RAYTRY",
    "price": "107.12000000"
  },
  {
    "symbol": "RNDRBRL",
    "price": "39.58000000"
  },
  {
    "symbol": "ENABTC",
    "price": "0.00000416"
  },
  {
    "symbol": "ENAUSDT",
    "price": "0.38290000"
  },
  {
    "symbol": "ENABNB",
    "price": "0.00062380"
  },
  {
    "symbol": "ENAFDUSD",
    "price": "0.38360000"
  },
  {
    "symbol": "ENATRY",
    "price": "13.99000000"
  },
  {
    "symbol": "LQTYFDUSD",
    "price": "0.65100000"
  },
  {
    "symbol": "MASKTRY",
    "price": "79.83000000"
  },
  {
    "symbol": "PENDLEUSDC",
    "price": "2.92200000"
  },
  {
    "symbol": "RDNTTRY",
    "price": "1.04400000"
  },
  {
    "symbol": "WBTC",
    "price": "0.00000147"
  },
  {
    "symbol": "WUSDT",
    "price": "0.13570000"
  },
  {
    "symbol": "WFDUSD",
    "price": "0.13550000"
  },
  {
    "symbol": "WTRY",
    "price": "4.95800000"
  },
  {
    "symbol": "BOMEUSDC",
    "price": "0.00171100"
  },
  {
    "symbol": "JTOUSDC",
    "price": "2.48300000"
  },
  {
    "symbol": "WIFUSDC",
    "price": "0.54900000"
  },
  {
    "symbol": "TNSRBTC",
    "price": "0.00000506"
  },
  {
    "symbol": "TNSRUSDT",
    "price": "0.46550000"
  },
  {
    "symbol": "TNSRFDUSD",
    "price": "0.45810000"
  },
  {
    "symbol": "TNSRTRY",
    "price": "16.90000000"
  },
  {
    "symbol": "SAGABTC",
    "price": "0.00000561"
  },
  {
    "symbol": "SAGAUSDT",
    "price": "0.51650000"
  },
  {
    "symbol": "SAGABNB",
    "price": "0.00084500"
  },
  {
    "symbol": "SAGAFDUSD",
    "price": "0.51440000"
  },
  {
    "symbol": "SAGATRY",
    "price": "18.87000000"
  },
  {
    "symbol": "USDTMXN",
    "price": "20.59000000"
  },
  {
    "symbol": "CKBUSDC",
    "price": "0.00585000"
  },
  {
    "symbol": "ENAUSDC",
    "price": "0.38310000"
  },
  {
    "symbol": "ETHFIUSDC",
    "price": "0.94700000"
  },
  {
    "symbol": "YGGUSDC",
    "price": "0.21490000"
  },
  {
    "symbol": "USDTCZK",
    "price": "24.02000000"
  },
  {
    "symbol": "TAOBTC",
    "price": "0.00421500"
  },
  {
    "symbol": "TAOUSDT",
    "price": "387.20000000"
  },
  {
    "symbol": "TAOFDUSD",
    "price": "387.40000000"
  },
  {
    "symbol": "TAOTRY",
    "price": "14141.00000000"
  },
  {
    "symbol": "CFXUSDC",
    "price": "0.11240000"
  },
  {
    "symbol": "RNDRUSDC",
    "price": "7.04100000"
  },
  {
    "symbol": "RUNEUSDC",
    "price": "1.39700000"
  },
  {
    "symbol": "SAGAUSDC",
    "price": "0.51680000"
  },
  {
    "symbol": "POLYXTRY",
    "price": "5.88000000"
  },
  {
    "symbol": "OMNIBTC",
    "price": "0.00004760"
  },
  {
    "symbol": "OMNIUSDT",
    "price": "4.37000000"
  },
  {
    "symbol": "OMNIBNB",
    "price": "0.01361000"
  },
  {
    "symbol": "OMNIFDUSD",
    "price": "4.39000000"
  },
  {
    "symbol": "OMNITRY",
    "price": "159.60000000"
  },
  {
    "symbol": "APTUSDC",
    "price": "5.42000000"
  },
  {
    "symbol": "GALAUSDC",
    "price": "0.01916000"
  },
  {
    "symbol": "OMNIBRL",
    "price": "40.20000000"
  },
  {
    "symbol": "STXUSDC",
    "price": "0.76900000"
  },
  {
    "symbol": "ICPUSDC",
    "price": "6.33600000"
  },
  {
    "symbol": "OMNIUSDC",
    "price": "4.38000000"
  },
  {
    "symbol": "PEPEBRL",
    "price": "0.00004637"
  },
  {
    "symbol": "YGGTRY",
    "price": "7.82000000"
  },
  {
    "symbol": "ADAJPY",
    "price": "102.70000000"
  },
  {
    "symbol": "SHIBJPY",
    "price": "0.00207900"
  },
  {
    "symbol": "SOLJPY",
    "price": "21160.00000000"
  },
  {
    "symbol": "XRPJPY",
    "price": "343.46000000"
  },
  {
    "symbol": "REZBTC",
    "price": "0.00000018"
  },
  {
    "symbol": "REZUSDT",
    "price": "0.01582000"
  },
  {
    "symbol": "REZBNB",
    "price": "0.00008310"
  },
  {
    "symbol": "REZFDUSD",
    "price": "0.03438000"
  },
  {
    "symbol": "REZTRY",
    "price": "0.57900000"
  },
  {
    "symbol": "EGLDTRY",
    "price": "739.40000000"
  },
  {
    "symbol": "PHBTRY",
    "price": "28.67000000"
  },
  {
    "symbol": "RSRTRY",
    "price": "0.27360000"
  },
  {
    "symbol": "BBBTC",
    "price": "0.00000161"
  },
  {
    "symbol": "BBUSDT",
    "price": "0.14860000"
  },
  {
    "symbol": "BBBNB",
    "price": "0.00024210"
  },
  {
    "symbol": "BBFDUSD",
    "price": "0.14890000"
  },
  {
    "symbol": "BBTRY",
    "price": "5.42900000"
  },
  {
    "symbol": "FRONTUSDC",
    "price": "0.88300000"
  },
  {
    "symbol": "PEOPLETRY",
    "price": "0.64200000"
  },
  {
    "symbol": "TRBUSDC",
    "price": "32.69000000"
  },
  {
    "symbol": "NOTUSDT",
    "price": "0.00258200"
  },
  {
    "symbol": "NOTBNB",
    "price": "0.00001353"
  },
  {
    "symbol": "NOTFDUSD",
    "price": "0.00258600"
  },
  {
    "symbol": "NOTTRY",
    "price": "0.09420000"
  },
  {
    "symbol": "ARKMUSDC",
    "price": "0.59500000"
  },
  {
    "symbol": "ARUSDC",
    "price": "7.87000000"
  },
  {
    "symbol": "BBUSDC",
    "price": "0.14860000"
  },
  {
    "symbol": "CRVUSDC",
    "price": "0.43510000"
  },
  {
    "symbol": "PEOPLEUSDC",
    "price": "0.01747000"
  },
  {
    "symbol": "ARFDUSD",
    "price": "7.86000000"
  },
  {
    "symbol": "ENAEUR",
    "price": "0.27700000"
  },
  {
    "symbol": "PEPEEUR",
    "price": "0.00000761"
  },
  {
    "symbol": "REZUSDC",
    "price": "0.01578000"
  },
  {
    "symbol": "TRBFDUSD",
    "price": "59.44000000"
  },
  {
    "symbol": "USDCTRY",
    "price": "36.51000000"
  },
  {
    "symbol": "BTCMXN",
    "price": "1888407.00000000"
  },
  {
    "symbol": "XRPMXN",
    "price": "46.71800000"
  },
  {
    "symbol": "ENSUSDC",
    "price": "23.53000000"
  },
  {
    "symbol": "LDOUSDC",
    "price": "1.39200000"
  },
  {
    "symbol": "NOTUSDC",
    "price": "0.00258200"
  },
  {
    "symbol": "NEARBRL",
    "price": "17.70000000"
  },
  {
    "symbol": "HIGHTRY",
    "price": "31.37000000"
  },
  {
    "symbol": "PEOPLEFDUSD",
    "price": "0.01749000"
  },
  {
    "symbol": "TNSRUSDC",
    "price": "0.46490000"
  },
  {
    "symbol": "USDTCOP",
    "price": "4104.00000000"
  },
  {
    "symbol": "IOBTC",
    "price": "0.00001262"
  },
  {
    "symbol": "IOUSDT",
    "price": "1.16300000"
  },
  {
    "symbol": "IOBNB",
    "price": "0.00189200"
  },
  {
    "symbol": "IOFDUSD",
    "price": "1.16100000"
  },
  {
    "symbol": "IOTRY",
    "price": "42.54000000"
  },
  {
    "symbol": "NOTBRL",
    "price": "0.03755000"
  },
  {
    "symbol": "TRUTRY",
    "price": "1.54400000"
  },
  {
    "symbol": "WIFEUR",
    "price": "0.52400000"
  },
  {
    "symbol": "ZKBTC",
    "price": "0.00000101"
  },
  {
    "symbol": "ZKUSDT",
    "price": "0.09450000"
  },
  {
    "symbol": "ZKFDUSD",
    "price": "0.09470000"
  },
  {
    "symbol": "ZKTRY",
    "price": "3.45100000"
  },
  {
    "symbol": "LISTAUSDT",
    "price": "0.22330000"
  },
  {
    "symbol": "LISTABNB",
    "price": "0.00035830"
  },
  {
    "symbol": "LISTAFDUSD",
    "price": "0.22310000"
  },
  {
    "symbol": "LISTATRY",
    "price": "8.16000000"
  },
  {
    "symbol": "ZROBTC",
    "price": "0.00002665"
  },
  {
    "symbol": "ZROUSDT",
    "price": "2.44500000"
  },
  {
    "symbol": "ZROFDUSD",
    "price": "2.45100000"
  },
  {
    "symbol": "ZROTRY",
    "price": "89.30000000"
  },
  {
    "symbol": "LISTABRL",
    "price": "2.17600000"
  },
  {
    "symbol": "BAKETRY",
    "price": "6.38000000"
  },
  {
    "symbol": "WIFBRL",
    "price": "3.17000000"
  },
  {
    "symbol": "ZKUSDC",
    "price": "0.09450000"
  },
  {
    "symbol": "ZROUSDC",
    "price": "2.44800000"
  },
  {
    "symbol": "IOUSDC",
    "price": "1.16000000"
  },
  {
    "symbol": "1000SATSUSDC",
    "price": "0.00012190"
  },
  {
    "symbol": "BNXTRY",
    "price": "35.70000000"
  },
  {
    "symbol": "ETHARS",
    "price": "3075000.00000000"
  },
  {
    "symbol": "GUSDT",
    "price": "0.01838000"
  },
  {
    "symbol": "GTRY",
    "price": "0.66900000"
  },
  {
    "symbol": "BANANABTC",
    "price": "0.00020600"
  },
  {
    "symbol": "BANANAUSDT",
    "price": "18.88000000"
  },
  {
    "symbol": "BANANABNB",
    "price": "0.03087000"
  },
  {
    "symbol": "BANANAFDUSD",
    "price": "18.99000000"
  },
  {
    "symbol": "BANANATRY",
    "price": "690.00000000"
  },
  {
    "symbol": "RENDERBTC",
    "price": "0.00003998"
  },
  {
    "symbol": "RENDERUSDT",
    "price": "3.67300000"
  },
  {
    "symbol": "RENDERFDUSD",
    "price": "3.67000000"
  },
  {
    "symbol": "RENDERUSDC",
    "price": "3.67500000"
  },
  {
    "symbol": "RENDERTRY",
    "price": "133.90000000"
  },
  {
    "symbol": "RENDEREUR",
    "price": "3.49800000"
  },
  {
    "symbol": "RENDERBRL",
    "price": "21.25000000"
  },
  {
    "symbol": "TONBTC",
    "price": "0.00003776"
  },
  {
    "symbol": "TONUSDT",
    "price": "3.47600000"
  },
  {
    "symbol": "TONFDUSD",
    "price": "3.48300000"
  },
  {
    "symbol": "TONTRY",
    "price": "127.00000000"
  },
  {
    "symbol": "BONKBRL",
    "price": "0.00007633"
  },
  {
    "symbol": "NOTEUR",
    "price": "0.00283000"
  },
  {
    "symbol": "DOGEJPY",
    "price": "31.83000000"
  },
  {
    "symbol": "MATICJPY",
    "price": "54.46000000"
  },
  {
    "symbol": "NEARJPY",
    "price": "457.00000000"
  },
  {
    "symbol": "TONUSDC",
    "price": "3.47400000"
  },
  {
    "symbol": "AAVEFDUSD",
    "price": "204.46000000"
  },
  {
    "symbol": "DOGSUSDT",
    "price": "0.00014940"
  },
  {
    "symbol": "DOGSBNB",
    "price": "0.00000064"
  },
  {
    "symbol": "DOGSFDUSD",
    "price": "0.00014950"
  },
  {
    "symbol": "DOGSTRY",
    "price": "0.00546000"
  },
  {
    "symbol": "EUREURI",
    "price": "0.99980000"
  },
  {
    "symbol": "EURIUSDT",
    "price": "1.04710000"
  },
  {
    "symbol": "DOGSBRL",
    "price": "0.00100600"
  },
  {
    "symbol": "DOGSUSDC",
    "price": "0.00014920"
  },
  {
    "symbol": "RAREBRL",
    "price": "0.68690000"
  },
  {
    "symbol": "RAREUSDC",
    "price": "0.05970000"
  },
  {
    "symbol": "SLFBTC",
    "price": "0.00000223"
  },
  {
    "symbol": "SLFTRY",
    "price": "7.49000000"
  },
  {
    "symbol": "SLFUSDC",
    "price": "0.20160000"
  },
  {
    "symbol": "SLFUSDT",
    "price": "0.20560000"
  },
  {
    "symbol": "AAVEUSDC",
    "price": "205.08000000"
  },
  {
    "symbol": "SUNTRY",
    "price": "0.66830000"
  },
  {
    "symbol": "STMXTRY",
    "price": "0.16520000"
  },
  {
    "symbol": "POLBNB",
    "price": "0.00044100"
  },
  {
    "symbol": "POLBRL",
    "price": "1.56200000"
  },
  {
    "symbol": "POLBTC",
    "price": "0.00000293"
  },
  {
    "symbol": "POLETH",
    "price": "0.00010740"
  },
  {
    "symbol": "POLEUR",
    "price": "0.25730000"
  },
  {
    "symbol": "POLFDUSD",
    "price": "0.26900000"
  },
  {
    "symbol": "POLJPY",
    "price": "40.41000000"
  },
  {
    "symbol": "POLTRY",
    "price": "9.81000000"
  },
  {
    "symbol": "POLUSDC",
    "price": "0.26900000"
  },
  {
    "symbol": "POLUSDT",
    "price": "0.26900000"
  },
  {
    "symbol": "NEIROUSDT",
    "price": "0.00032460"
  },
  {
    "symbol": "TURBOUSDT",
    "price": "0.00305500"
  },
  {
    "symbol": "1MBABYDOGEUSDT",
    "price": "0.00144440"
  },
  {
    "symbol": "CATIUSDT",
    "price": "0.14010000"
  },
  {
    "symbol": "CATIBNB",
    "price": "0.00045600"
  },
  {
    "symbol": "CATIFDUSD",
    "price": "0.14050000"
  },
  {
    "symbol": "CATITRY",
    "price": "5.12000000"
  },
  {
    "symbol": "1MBABYDOGEFDUSD",
    "price": "0.00144230"
  },
  {
    "symbol": "1MBABYDOGETRY",
    "price": "0.05267000"
  },
  {
    "symbol": "CATIBRL",
    "price": "1.91000000"
  },
  {
    "symbol": "BTCEURI",
    "price": "87754.03000000"
  },
  {
    "symbol": "NEIROFDUSD",
    "price": "0.00032560"
  },
  {
    "symbol": "NEIROTRY",
    "price": "0.01187000"
  },
  {
    "symbol": "HMSTRUSDT",
    "price": "0.00172700"
  },
  {
    "symbol": "HMSTRBNB",
    "price": "0.00000387"
  },
  {
    "symbol": "HMSTRFDUSD",
    "price": "0.00172300"
  },
  {
    "symbol": "HMSTRTRY",
    "price": "0.06290000"
  },
  {
    "symbol": "EIGENBTC",
    "price": "0.00001633"
  },
  {
    "symbol": "EIGENUSDT",
    "price": "1.50800000"
  },
  {
    "symbol": "EIGENFDUSD",
    "price": "1.50800000"
  },
  {
    "symbol": "EIGENTRY",
    "price": "54.96000000"
  },
  {
    "symbol": "NEIROBRL",
    "price": "0.00205300"
  },
  {
    "symbol": "NEIROEUR",
    "price": "0.00034972"
  },
  {
    "symbol": "BNSOLSOL",
    "price": "1.03460000"
  },
  {
    "symbol": "SCRUSDT",
    "price": "0.56500000"
  },
  {
    "symbol": "SUIBRL",
    "price": "16.51000000"
  },
  {
    "symbol": "TURBOTRY",
    "price": "0.11160000"
  },
  {
    "symbol": "BNSOLUSDT",
    "price": "146.00000000"
  },
  {
    "symbol": "LUMIAUSDT",
    "price": "0.40700000"
  },
  {
    "symbol": "SCRBTC",
    "price": "0.00000612"
  },
  {
    "symbol": "SCRFDUSD",
    "price": "0.56600000"
  },
  {
    "symbol": "SCRTRY",
    "price": "20.61000000"
  },
  {
    "symbol": "KAIAUSDT",
    "price": "0.12770000"
  },
  {
    "symbol": "COWUSDT",
    "price": "0.29590000"
  },
  {
    "symbol": "CETUSUSDT",
    "price": "0.11350000"
  },
  {
    "symbol": "PNUTUSDT",
    "price": "0.15120000"
  },
  {
    "symbol": "ACTUSDT",
    "price": "0.18790000"
  },
  {
    "symbol": "ACTTRY",
    "price": "6.85000000"
  },
  {
    "symbol": "COWTRY",
    "price": "10.83000000"
  },
  {
    "symbol": "CETUSTRY",
    "price": "4.15000000"
  },
  {
    "symbol": "TROYTRY",
    "price": "0.04930000"
  },
  {
    "symbol": "PNUTTRY",
    "price": "5.53000000"
  },
  {
    "symbol": "ACTFDUSD",
    "price": "0.18780000"
  },
  {
    "symbol": "ACTUSDC",
    "price": "0.18820000"
  },
  {
    "symbol": "NEIROUSDC",
    "price": "0.00032458"
  },
  {
    "symbol": "PNUTBTC",
    "price": "0.00000165"
  },
  {
    "symbol": "PNUTFDUSD",
    "price": "0.15180000"
  },
  {
    "symbol": "PNUTUSDC",
    "price": "0.15120000"
  },
  {
    "symbol": "USUALUSDT",
    "price": "0.19310000"
  },
  {
    "symbol": "ACTBRL",
    "price": "1.08200000"
  },
  {
    "symbol": "ACTEUR",
    "price": "0.17820000"
  },
  {
    "symbol": "CATIUSDC",
    "price": "0.14030000"
  },
  {
    "symbol": "ETHEURI",
    "price": "2395.04000000"
  },
  {
    "symbol": "LUMIATRY",
    "price": "14.80000000"
  },
  {
    "symbol": "PNUTBRL",
    "price": "0.86900000"
  },
  {
    "symbol": "PNUTEUR",
    "price": "0.14460000"
  },
  {
    "symbol": "APEFDUSD",
    "price": "0.58400000"
  },
  {
    "symbol": "FDUSDUSDC",
    "price": "0.99870000"
  },
  {
    "symbol": "HBARUSDC",
    "price": "0.19480000"
  },
  {
    "symbol": "OMUSDC",
    "price": "7.99770000"
  },
  {
    "symbol": "RAYUSDC",
    "price": "2.93700000"
  },
  {
    "symbol": "TAOUSDC",
    "price": "387.50000000"
  },
  {
    "symbol": "TURBOFDUSD",
    "price": "0.00301600"
  },
  {
    "symbol": "THEBTC",
    "price": "0.00000561"
  },
  {
    "symbol": "THEBNB",
    "price": "0.00084190"
  },
  {
    "symbol": "THEFDUSD",
    "price": "0.50840000"
  },
  {
    "symbol": "THETRY",
    "price": "18.90200000"
  },
  {
    "symbol": "THEUSDT",
    "price": "0.51730000"
  },
  {
    "symbol": "APEUSDC",
    "price": "0.58600000"
  },
  {
    "symbol": "BOMEEUR",
    "price": "0.00163200"
  },
  {
    "symbol": "EIGENUSDC",
    "price": "1.50200000"
  },
  {
    "symbol": "HBARFDUSD",
    "price": "0.19469000"
  },
  {
    "symbol": "MEMEUSDC",
    "price": "0.00357000"
  },
  {
    "symbol": "TROYUSDC",
    "price": "0.00132700"
  },
  {
    "symbol": "WLDEUR",
    "price": "0.99400000"
  },
  {
    "symbol": "1MBABYDOGEUSDC",
    "price": "0.00143870"
  },
  {
    "symbol": "CETUSUSDC",
    "price": "0.11340000"
  },
  {
    "symbol": "COWUSDC",
    "price": "0.29690000"
  },
  {
    "symbol": "DYDXUSDC",
    "price": "0.66730000"
  },
  {
    "symbol": "HMSTRUSDC",
    "price": "0.00172500"
  },
  {
    "symbol": "TURBOUSDC",
    "price": "0.00305500"
  },
  {
    "symbol": "ENABRL",
    "price": "2.21800000"
  },
  {
    "symbol": "EOSFDUSD",
    "price": "0.56000000"
  },
  {
    "symbol": "KAIAUSDC",
    "price": "0.12800000"
  },
  {
    "symbol": "SANDUSDC",
    "price": "0.29910000"
  },
  {
    "symbol": "XLMFDUSD",
    "price": "0.29850000"
  },
  {
    "symbol": "CHZUSDC",
    "price": "0.04760000"
  },
  {
    "symbol": "PYTHUSDC",
    "price": "0.20430000"
  },
  {
    "symbol": "RSRUSDC",
    "price": "0.00749000"
  },
  {
    "symbol": "RSRFDUSD",
    "price": "0.00747000"
  },
  {
    "symbol": "WUSDC",
    "price": "0.13560000"
  },
  {
    "symbol": "XTZUSDC",
    "price": "0.77000000"
  },
  {
    "symbol": "ACXUSDT",
    "price": "0.25710000"
  },
  {
    "symbol": "ORCAUSDT",
    "price": "1.70300000"
  },
  {
    "symbol": "MOVEBTC",
    "price": "0.00000455"
  },
  {
    "symbol": "MOVEUSDT",
    "price": "0.41910000"
  },
  {
    "symbol": "MOVEBNB",
    "price": "0.00068360"
  },
  {
    "symbol": "MOVEFDUSD",
    "price": "0.41980000"
  },
  {
    "symbol": "MOVETRY",
    "price": "15.34100000"
  },
  {
    "symbol": "MEBTC",
    "price": "0.00001430"
  },
  {
    "symbol": "MEUSDT",
    "price": "1.31700000"
  },
  {
    "symbol": "MEFDUSD",
    "price": "1.31300000"
  },
  {
    "symbol": "METRY",
    "price": "48.07000000"
  },
  {
    "symbol": "ACXUSDC",
    "price": "0.25720000"
  },
  {
    "symbol": "ORCAUSDC",
    "price": "1.70800000"
  },
  {
    "symbol": "ACXFDUSD",
    "price": "0.25980000"
  },
  {
    "symbol": "ORCAFDUSD",
    "price": "1.71300000"
  },
  {
    "symbol": "ACXTRY",
    "price": "9.39000000"
  },
  {
    "symbol": "ORCATRY",
    "price": "62.40000000"
  },
  {
    "symbol": "KSMTRY",
    "price": "664.00000000"
  },
  {
    "symbol": "CELOTRY",
    "price": "13.82000000"
  },
  {
    "symbol": "HIVEFDUSD",
    "price": "0.29250000"
  },
  {
    "symbol": "HIVEUSDC",
    "price": "0.29180000"
  },
  {
    "symbol": "IDEXFDUSD",
    "price": "0.03303000"
  },
  {
    "symbol": "IDEXUSDC",
    "price": "0.03309000"
  },
  {
    "symbol": "TLMFDUSD",
    "price": "0.00656000"
  },
  {
    "symbol": "TLMUSDC",
    "price": "0.00653000"
  },
  {
    "symbol": "VELODROMEUSDT",
    "price": "0.06240000"
  },
  {
    "symbol": "VANAUSDT",
    "price": "7.73200000"
  },
  {
    "symbol": "VANABNB",
    "price": "0.01262000"
  },
  {
    "symbol": "VANAFDUSD",
    "price": "7.74600000"
  },
  {
    "symbol": "VANATRY",
    "price": "282.40000000"
  },
  {
    "symbol": "1000CATUSDT",
    "price": "0.00918000"
  },
  {
    "symbol": "1000CATBNB",
    "price": "0.00001481"
  },
  {
    "symbol": "1000CATFDUSD",
    "price": "0.00918000"
  },
  {
    "symbol": "1000CATTRY",
    "price": "0.33500000"
  },
  {
    "symbol": "PENGUUSDT",
    "price": "0.00725600"
  },
  {
    "symbol": "PENGUBNB",
    "price": "0.00001183"
  },
  {
    "symbol": "PENGUFDUSD",
    "price": "0.00726400"
  },
  {
    "symbol": "PENGUTRY",
    "price": "0.26520000"
  },
  {
    "symbol": "USUALBTC",
    "price": "0.00000210"
  },
  {
    "symbol": "USUALFDUSD",
    "price": "0.19350000"
  },
  {
    "symbol": "USUALTRY",
    "price": "7.06000000"
  },
  {
    "symbol": "1000CATUSDC",
    "price": "0.00916000"
  },
  {
    "symbol": "PENGUUSDC",
    "price": "0.00727100"
  },
  {
    "symbol": "BIOUSDT",
    "price": "0.10190000"
  },
  {
    "symbol": "BIOBNB",
    "price": "0.00016520"
  },
  {
    "symbol": "BIOFDUSD",
    "price": "0.10110000"
  },
  {
    "symbol": "BIOTRY",
    "price": "3.70300000"
  },
  {
    "symbol": "BIOUSDC",
    "price": "0.10140000"
  },
  {
    "symbol": "HIVETRY",
    "price": "10.66000000"
  },
  {
    "symbol": "MOVEUSDC",
    "price": "0.41990000"
  },
  {
    "symbol": "PHATRY",
    "price": "5.06000000"
  },
  {
    "symbol": "SUSHITRY",
    "price": "27.13000000"
  },
  {
    "symbol": "DUSDT",
    "price": "0.07741000"
  },
  {
    "symbol": "DTRY",
    "price": "2.82900000"
  },
  {
    "symbol": "APTJPY",
    "price": "801.00000000"
  },
  {
    "symbol": "SUIJPY",
    "price": "427.81000000"
  },
  {
    "symbol": "XLMJPY",
    "price": "44.52000000"
  },
  {
    "symbol": "PEPEJPY",
    "price": "0.00119600"
  },
  {
    "symbol": "PHAUSDC",
    "price": "0.13910000"
  },
  {
    "symbol": "USDCPLN",
    "price": "3.99500000"
  },
  {
    "symbol": "STEEMUSDC",
    "price": "0.15330000"
  },
  {
    "symbol": "USUALUSDC",
    "price": "0.19280000"
  },
  {
    "symbol": "AIXBTUSDT",
    "price": "0.17220000"
  },
  {
    "symbol": "AIXBTUSDC",
    "price": "0.17220000"
  },
  {
    "symbol": "CGPTUSDT",
    "price": "0.11630000"
  },
  {
    "symbol": "CGPTUSDC",
    "price": "0.11610000"
  },
  {
    "symbol": "COOKIEUSDT",
    "price": "0.18180000"
  },
  {
    "symbol": "COOKIEUSDC",
    "price": "0.18190000"
  },
  {
    "symbol": "SBTC",
    "price": "0.00000801"
  },
  {
    "symbol": "SBNB",
    "price": "0.00120400"
  },
  {
    "symbol": "SETH",
    "price": "0.00029370"
  },
  {
    "symbol": "SEUR",
    "price": "0.69800000"
  },
  {
    "symbol": "SFDUSD",
    "price": "0.73890000"
  },
  {
    "symbol": "STRY",
    "price": "26.93000000"
  },
  {
    "symbol": "SUSDC",
    "price": "0.73820000"
  },
  {
    "symbol": "SUSDT",
    "price": "0.73620000"
  },
  {
    "symbol": "IOTXJPY",
    "price": "2.48200000"
  },
  {
    "symbol": "SEIJPY",
    "price": "39.54000000"
  },
  {
    "symbol": "SOLVUSDT",
    "price": "0.03030000"
  },
  {
    "symbol": "SOLVBNB",
    "price": "0.00004960"
  },
  {
    "symbol": "SOLVFDUSD",
    "price": "0.03040000"
  },
  {
    "symbol": "SOLVTRY",
    "price": "1.11200000"
  },
  {
    "symbol": "TRUMPUSDT",
    "price": "13.23000000"
  },
  {
    "symbol": "TRUMPUSDC",
    "price": "13.24000000"
  },
  {
    "symbol": "AIXBTTRY",
    "price": "6.28000000"
  },
  {
    "symbol": "TRUMPTRY",
    "price": "483.40000000"
  },
  {
    "symbol": "ANIMEUSDT",
    "price": "0.02410000"
  },
  {
    "symbol": "ANIMEUSDC",
    "price": "0.02400000"
  },
  {
    "symbol": "ANIMEBNB",
    "price": "0.00003920"
  },
  {
    "symbol": "ANIMEFDUSD",
    "price": "0.02410000"
  },
  {
    "symbol": "ANIMETRY",
    "price": "0.88000000"
  },
  {
    "symbol": "BERABTC",
    "price": "0.00006959"
  },
  {
    "symbol": "BERAUSDT",
    "price": "6.38600000"
  },
  {
    "symbol": "BERAUSDC",
    "price": "6.38600000"
  },
  {
    "symbol": "BERAFDUSD",
    "price": "6.41100000"
  },
  {
    "symbol": "BERABNB",
    "price": "0.01042600"
  },
  {
    "symbol": "BERATRY",
    "price": "233.20000000"
  },
  {
    "symbol": "1000CHEEMSUSDT",
    "price": "0.00092100"
  },
  {
    "symbol": "1000CHEEMSUSDC",
    "price": "0.00092400"
  },
  {
    "symbol": "TSTUSDT",
    "price": "0.07730000"
  },
  {
    "symbol": "TSTUSDC",
    "price": "0.07730000"
  },
  {
    "symbol": "LAYERBTC",
    "price": "0.00000791"
  },
  {
    "symbol": "LAYERUSDT",
    "price": "0.72630000"
  },
  {
    "symbol": "LAYERUSDC",
    "price": "0.72720000"
  },
  {
    "symbol": "LAYERBNB",
    "price": "0.00119230"
  },
  {
    "symbol": "LAYERFDUSD",
    "price": "0.72790000"
  },
  {
    "symbol": "LAYERTRY",
    "price": "26.51000000"
  },
  {
    "symbol": "QTUMTRY",
    "price": "97.30000000"
  },
  {
    "symbol": "TRUMPEUR",
    "price": "12.63000000"
  },
  {
    "symbol": "VTHOTRY",
    "price": "0.10840000"
  },
  {
    "symbol": "HEIBTC",
    "price": "0.00000588"
  },
  {
    "symbol": "HEIUSDT",
    "price": "0.54010000"
  },
  {
    "symbol": "CAKEUSDC",
    "price": "2.17100000"
  },
  {
    "symbol": "HEIUSDC",
    "price": "0.53490000"
  },
  {
    "symbol": "TRUMPFDUSD",
    "price": "13.22000000"
  },
  {
    "symbol": "TSTFDUSD",
    "price": "0.07730000"
  },
  {
    "symbol": "BNXUSDC",
    "price": "0.97720000"
  },
  {
    "symbol": "LTCJPY",
    "price": "17147.00000000"
  },
  {
    "symbol": "BCHJPY",
    "price": "43900.00000000"
  },
  {
    "symbol": "LINKJPY",
    "price": "2278.00000000"
  },
  {
    "symbol": "KAITOBTC",
    "price": "0.00001919"
  },
  {
    "symbol": "KAITOUSDT",
    "price": "1.75560000"
  },
  {
    "symbol": "KAITOUSDC",
    "price": "1.75420000"
  },
  {
    "symbol": "KAITOBNB",
    "price": "0.00285270"
  },
  {
    "symbol": "KAITOFDUSD",
    "price": "1.76110000"
  },
  {
    "symbol": "KAITOTRY",
    "price": "64.12800000"
  }
]';

        $data = json_decode($json, true);
        //转大写
        $symbols =  strtoupper($coin.$symbol);
        //获取数组中symbol为$symbol的价格
        foreach ($data as $value) {
            if ($value['symbol'] == $symbols) {
                return $value['price'];
            }
        }
        return '0.00000000';

    }

}
