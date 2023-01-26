 <!-- Content wrapper -->
 <div class="content-wrapper">
   <div class="container">
     <div class="card" style="margin-top:20px; margin-bottom:50px">
       <div class="card-body p-5">
         <h4 class="pb-3">Artikel / <strong>Komentar</strong></h4>
         <table id="example" class="display" style="width:100%">

           <thead>
             <tr>
               <th style="text-align:center">Id</th>
               <th style="text-align:center">Judul</th>
               <th style="text-align:center">Komentar</th>
               <th style="text-align:center">Pengirim</th>
               <th style="text-align:center">Aksi</th>
             </tr>
           </thead>
           <tbody>
             <?php foreach ($komentarDB as $row) : ?>
               <tr>
                 <td scope="row"><?= $h++ ?></td>
                 <td scope="row"><?= $row["judul"] ?></td>
                 <td><?= $row["komentar"] ?></td>
                 <td><?= $row["nama_pengirim"] ?></td>
                 <td align="center">
                   <div class="dropdown">
                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                       <i class="bx bx-dots-vertical-rounded"></i>
                     </button>
                     <div class="dropdown-menu">
                       <a class="dropdown-item" href="deleteKomentar.php?id=<?= $row["komentar_id"] ?>" onclick="return confirm('Tekan OK untuk hapus');">
                         <i class="bx bx-trash me-1"></i> Delete</a>
                     </div>
                   </div>
                 </td>
               </tr>
             <?php endforeach ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>