<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
   <div class="row">
      <div class="col">
         <?php if (session()->getFlashdata('pesan')) : ?>
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php endif; ?>
         <!-- <a href="/books/create" class="btn btn-primary mb-2">Tambah Buku</a> -->
         <div class="flex">
            <tbody class="mt-4 grid grid-cols-2  sm:grid-cols-4 gap-x-5 gap-y-5">
               <?php $i = 1; ?>
               <?php foreach ($books as $b) : ?>
               <div >
                  <div class="py-3 sm:max-w-xl sm:mx-auto">
                     <div class="bg-white shadow-lg border-gray-100 max-h-80	 border sm:rounded-3xl p-8 flex space-x-8">
                        <div class="h-48 overflow-visible w-1/2">
                           <img class="rounded-3xl shadow-lg" src="/img/<?= $b['sampul']; ?>" alt="">
                        </div>
                        <div class="flex flex-col w-1/2 space-y-4">
                           <div class="flex justify-between items-start">
                              <h2 class="text-3xl font-bold"><?= $b['judul']; ?></h2>
                              <div class="bg-yellow-400 font-bold rounded-xl p-2">7.2</div>
                           </div>
                           <div>
                              <div class="text-sm text-gray-400">Series</div>
                              <div class="text-lg text-gray-800">2019</div>
                           </div>
                           <p class=" text-gray-400 max-h-40 overflow-y-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                           <div class="flex text-2xl font-bold text-a">$83.90</div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
            </tbody>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>