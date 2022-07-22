<hr><hr><hr><hr>
<div class="col-sm-12">
  <div  style="background-color: #C0C0C0;" class="container p-5 rounded">
  <div class="container">
      <div class="caption">
    <h3 class="py-3" style="text-align: center;">Registrasi</h3>
   </div>
   <form action="<?php echo base_url();?>index.php/RegistrasiBook/save" method="POST">
    <input type="hidden" name="id" value="<?php echo(isset($row->id)?$row->id:'');?>" class="form-control">
    <table class="table" width="100%">
      <tr>
        <td>USERNAME</td>
        <td>:</td>
        <td><input type="text" name="username" value="<?php echo (isset($row->username)?$row->username:'');?>" required class="form-control"></td>
      </tr>
      <tr>
        <td>EMAIL</td>
        <td>:</td>
        <td><input type="text" name="email" value="<?php echo (isset($row->email)?$row->email:'');?>" required class="form-control"></td>
      </tr>
      <tr>
        <td>PASSWORD</td>
        <td>:</td>
        <td><input type="text" name="password" value="<?php echo (isset($row->password)?$row->password:'');?>" required class="form-control"></td>
      </tr>
      <tr>
        <td colspan="3">
          <input style="width: 100%; background-color:  #FA8072" type="submit" class="btn btn-success" value="Simpan">
        </td>
      </tr>
    </table>
   </form>
 </div>s
</div> 
</div>
   