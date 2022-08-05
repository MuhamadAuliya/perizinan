 <div class="card">
     <div class="card-header">
         <h4>Form User</h4>
     </div>
     <div class="card-body">
         <form method="post" action="admin.php?target=db_user&action=input" data-parsley-validate class="form-horizontal form-label-left">
             <div class="mb-3">
                 <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                     ID USER
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="id_user" class="form-control" require="required" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     USERNAME
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="username" class="form-control" require="required" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     PASSWORD
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="password" class="form-control" />
                 </div>
                 <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     JABATAN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="jabatan" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="submit" class="btn btn-success" value="simpan">
                     <a class="btn btn-danger btn-sm" href="admin.php? target=db_user">kembali</a>
                 </div>
             </div>
         </form>
     </div>
 </div>