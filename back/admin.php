<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="40%">帳號</td>
                    <td width="40%">密碼</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                $admins = $Admin->all();
                foreach ($admins as $admin) {
                ?>
                    <tr>
                        <td width="40%">
                            <input type="text" name="acc[]" value="<?= $admin['acc']; ?>">
                        </td>
                        <td width="40%">
                            <input type="password" name="pw[]" value="<?= $admin['pw']; ?>">
                            <input type="hidden" name="id[]" value="<?= $admin['id']; ?>">
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="del[]" value="<?= $admin['id']; ?>">
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
                    <input type="hidden" name="table" value="<?= $do; ?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>