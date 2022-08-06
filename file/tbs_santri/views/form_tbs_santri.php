 <div class="card">
     <div class="card-header">
         <h4>Atribut</h4>
     </div>
     <div class="card-body">
         <form method="post" action="admin.php?target=tbs_santri&action=input" data-parsley-validate class="form-horizontal form-label-left">
             <div class="mb-3">
                 <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                     NIS
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="nis" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     NAMA
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="nama" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     JENIS_KELAMIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="jenis_kelamin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
             <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     TANGGAL_LAHIR
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="date" name="tanggal_lahir" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
             <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     ASRAMA
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="asrama" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="submit" class="btn btn-success" value="simpan">
                     <a class="btn btn-danger btn-sm" href="admin.php? target=tbs_santri">kembali</a>
                 </div>
             </div>
         </form>
     </div>
 </div>