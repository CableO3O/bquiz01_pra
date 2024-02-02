<div class="container" style="text-align: center;">
    <h3>新增動態文字廣告</h3>
    <hr>
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <table>
            
            <tr>
                <td>動態文字廣告:</td>
                <td>
                    <input style="width: 254px;" type="text" name="ad">
                </td>
            </tr>
        </table>
        <input type="hidden" name="table" value="ad">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </form>
</div>