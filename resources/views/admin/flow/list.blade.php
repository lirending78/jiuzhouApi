
<style>
    /* 表格通用样式 */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        vertical-align: middle;
    }

    table th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tr:hover {
        background-color: #f1f1f1;
    }

    /* 标题样式 */
    h3, h4 {
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    /* 容器样式 */
    .wallet-detail {
        padding: 20px;
        font-family: Arial, sans-serif;
        color: #555;
    }

    .wallet-detail .table-bordered {
        border: 1px solid #ccc;
    }

    /* 按钮样式 */
    .btn {
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        background-color: #007bff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    /* 分页样式 */
    .pagination {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        color: #007bff;
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .pagination a:hover {
        background-color: #007bff;
        color: #fff;
    }
</style>

<h4>交易记录</h4>
<table class="table table-striped">
    <thead>
    <tr>
        <th>类型</th>
        <th>金额</th>
        <th>类型</th>
        <th>状态</th>
        <th>交易单号</th>
        <th>交易时间</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($list as $transaction)
        <tr>
            <td>{{ $transaction['currency'] }}</td>
            <td>{{ $transaction['amount'] }}</td>
            <td>{{ $transaction['transaction_type']}}</td>
            <td>{{ $transaction['status'] }}</td>
            <td>{{ $transaction['transaction_no'] }}</td>
            <td>{{ $transaction['created_at'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
