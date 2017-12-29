<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/auth/css/H-ui.min.css" />
<div class="page-container">
    <table class="table table-border table-bordered table-bg">
        <thead>
        <tr>
            <th colspan="7" scope="col">出行</th>
        </tr>
        <tr class="text-c">
            <th>统计</th>
            <th>ofo</th>
            <th>mobike</th>
            <th>滴滴</th>
            <!--<th>用户</th>-->
            <!--<th>管理员</th>-->
        </tr>
        </thead>
        <tbody>
        <tr class="text-c">
            <td>总数</td>
            <td><?php echo ($info['ofo']); ?></td>
            <td><?php echo ($info['mobike']); ?></td>
            <td><?php echo ($info['didi']); ?></td>
            <!--<td>8</td>-->
            <!--<td>20</td>-->
        </tr>
        <tr class="text-c">
            <td>本周</td>
            <td><?php echo ($info['']); ?></td>
            <td><?php echo ($info['']); ?></td>
            <td><?php echo ($info['']); ?></td>
            <!--<td>0</td>-->
            <!--<td>0</td>-->
        </tr>
        <tr class="text-c">
            <td>本月</td>
            <td><?php echo ($info['']); ?></td>
            <td><?php echo ($info['']); ?></td>
            <td><?php echo ($info['']); ?></td>
            <!--<td>0</td>-->
            <!--<td>0</td>-->
        </tr>
        </tbody>
    </table>
    <table class="table table-border table-bordered table-bg mt-20">
        <thead>
        <tr>
            <th colspan="2" scope="col">服务器信息</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>服务器IP地址</td>
            <td><?php echo ($data['SERVER_ADDR']); ?></td>
        </tr>
        <tr>
            <td>服务器域名</td>
            <td><?php echo ($data['HTTP_HOST']); ?></td>
        </tr>
        <tr>
            <td>服务器端口 </td>
            <td><?php echo ($data['SERVER_PORT']); ?></td>
        </tr>
        <tr>
            <td>服务器IIS版本 </td>
            <td><?php echo ($data['SERVER_SOFTWARE']); ?></td>
        </tr>
        <tr>
            <td>网站根目录 </td>
            <td><?php echo ($data['DOCUMENT_ROOT']); ?></td>
        </tr>
        <tr>
            <td>服务器操作系统 </td>
            <td><?PHP echo PHP_OS; ?></td>
        </tr>
        <tr>
            <td>服务器当前时间 </td>
            <td><?php echo (date("Y-m-d H:i:s",$data['REQUEST_TIME'])); ?></td>
        </tr>

        </tbody>
    </table>
</div>