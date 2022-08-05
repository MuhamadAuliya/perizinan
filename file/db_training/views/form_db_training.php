 <div class="card">
     <div class="card-header">
         <h4>Form User</h4>
     </div>
     <div class="card-body">
         <form method="post" action="admin.php?target=db_training&action=input" data-parsley-validate class="form-horizontal form-label-left">
             <div class="mb-3">
                 <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                     ID_TRAINING
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="id_training" class="form-control" require="required" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     ID_ATRIBUT
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="id_atribut" class="form-control" require="required" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     JENIS_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="jenis_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     JARAK_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="jarak_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     JUMLAH_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="jumlah_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     STATUS_SANTRI
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="status_santri" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     BERI_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="beri_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="submit" class="btn btn-success" value="simpan">
                     <a class="btn btn-danger btn-sm" href="admin.php? target=db_training">kembali</a>
                 </div>
             </div>
         </form>
     </div>
 </div>