<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
        text-align: left;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }
    th {
        background-color: #f4f4f4;
        font-weight: bold;
        text-align: center;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    td {
        text-align: center;
    }
</style>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>用户名</th>
        <th>手机号</th>
        <th>注册时间</th>
    </tr>
    </thead>
    <tbody>
    @foreach($all_child as $v)
        <tr>
            <td>{{ $v['user_id'] }}</td>
            <td>{{ $v['user_name'] }}</td>
            <td>{{ $v['user_mobile'] }}</td>
            <td>{{ $v['created_at'] }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
