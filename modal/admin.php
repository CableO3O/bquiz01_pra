<div class="container" style="text-align: center;">
    <h3>新增管理者帳號</h3>
    <hr>
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <table>
            
            <tr>
                <td>帳號:</td>
                <td>
                    <input style="width: 254px;" type="text" name="acc">
                </td>
            </tr>
            <tr>
                <td>密碼:</td>
                <td>
                    <input style="width: 254px;" type="text" name="pw">
                </td>
            </tr>
            <tr>
                <td>確認密碼:</td>
                <td>
                    <input style="width: 254px;" type="text" name="pw2">
                </td>
            </tr>
        </table>
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </form>
</div>