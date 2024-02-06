<div class="container" style="text-align: center;">
    <h3>新增最新消息資料</h3>
    <hr>
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <table>
            
            <tr>
                <td>最新消息資料:</td>
                <td>
                    <input style="width: 254px;" type="text" name="news">
                </td>
            </tr>
        </table>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </form>
</div>