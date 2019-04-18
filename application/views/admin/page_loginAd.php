<div class="container">
    <div class="box">
            <form action="<?php echo base_url('Admin/login'); ?>" action="GET"  method="post">       
                <table>
                    <tr>
                        <td>NIM       </td>
                        <td><input type="text" name="nim" placeholder="NIM"></td>
                    </tr>
                    <tr>
                        <td>Password  </td>
                        <td><input type="password" name="pass" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
    </div>
</div>