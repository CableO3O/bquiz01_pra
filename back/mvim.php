<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">動畫圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $mvims = $Mvim->all();
                foreach ($mvims as $mvim) {
                ?>
                    <tr>
                        <td width="45%">
                            <img src="./img/<?= $mvim['img']; ?>" alt="" style="width: 200px;height:200px">
                        </td>
                            <input type="hidden" name="id[]" value="<?= $mvim['id']; ?>">
                        <td width="7%">
                            <input type="radio" name="sh[]" value="<?= $mvim['id']; ?>" <?= ($mvim['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" value="<?= $mvim['id']; ?>">
                        </td>
                        <td>
                            <input type="button" onclick="op('#cover','#cvr','./modal/upload.php?id=<?= $mvim['id']; ?>&&table=<?=$do;?>')" value="更換動畫">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動畫圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>