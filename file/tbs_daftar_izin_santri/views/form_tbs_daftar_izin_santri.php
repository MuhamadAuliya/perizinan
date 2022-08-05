 <div class="card">
     <div class="card-header">
         <h4>From Izin Santri</h4>
     </div>
     <div class="card-body">
         <form method="post" action="admin.php?target=tbs_daftar_izin_santri&action=input" data-parsley-validate class="form-horizontal form-label-left">
             <div class="mb-3">
                 <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                     ID_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="id_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     TANGGAL_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="tanggal_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     KETERANGAN_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="keterangan_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
             <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     LAMA_IZIN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="lama_izin" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
             <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     TUJUAN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="tujuan" class="form-control" />
                 </div>
             </div>
             <div class="mb-3">
             <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                     TANGGAL_KEMBALI
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="tanggal_kembali" class="form-control" />
                 </div>
             </div>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="submit" class="btn btn-success" value="simpan">
                     <a class="btn btn-danger btn-sm" href="admin.php? target=tbs_daftar_izin_santri">kembali</a>
                 </div>
             </div>
         </form>
     </div>
 </div>