<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="./api/main.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">網站標題</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php 
$titles=$Title->all();
foreach ($titles as $title) {
    ?>
                <tr>
                    <td width="45%"><img src="./img/<?=$title['img'];?>" alt="" style="width: 300px;height:30px"></td>
                    <td width="23%"><input type="text" name="" value="<?=$title['text'];?>"></td>
                    <td width="7%"><input type="radio" name="sh[]" value="<?=$title['id'];?>"></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$title['id'];?>"></td>
                    <td><input type="button" onclick="op('#cover','#cvr','.modal/update_title.php?modal=<?=$title['id'];?>')" value="更新圖片"></td>
                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','.modal/<?=$do;?>.php?modal=<?=$do;?>')" value="新增網站標題圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>