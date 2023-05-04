<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<!-- favicon link -->
<link rel="shortcut icon" href="https://media.discordapp.net/attachments/963226363362422794/1049199082515742781/iconlogo.png" type="image/x-icon">
<title>BRJ</title>
<header x-data="{navbarOpen: false}" class="absolute sticky left-0 top-0 z-50 bg-white/90 w-full backdrop-blur">
    <div class="mx-auto h-[90px] max-w-7xl px-8 md:px-6">
        <div class="relative flex h-full items-center justify-between border-b border-slate-500/10">
            <!-- logo -->
            <div class="w-[15rem] max-w-full">
                <a href="#">
                    <img src="https://media.discordapp.net/attachments/963226363362422794/1049180572884422736/teslogoh__1_-removebg-preview_1.png" alt="logo" class="w-full">
                </a>
            </div>

            <!-- menu -->
            <div class="flex w-full items-center justify-between">
                <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-[90px] w-full max-w-[350px] rounded-lg border border-blue-200 bg-white py-5 px-6 shadow-lg shadow-blue-400/5 transition-all lg:static lg:block lg:max-w-full lg:border-none lg:shadow-none lg:bg-transparent lg:px-0 lg:py-0">
                    <ul class="flex flex-col justify-center gap-8 lg:flex-row">
                        <li>
                            <a href="<?php echo site_url('dashboard')?>" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('barang')?>" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Product</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('supplier')?>" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Supplier</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- menu btn -->
            <div class="flex">
                <a href="<?= base_url('user/logout') ?>" class="mr-10 hidden rounded-md bg-red-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-red-500/20 duration-200 hover:bg-red-600 sm:block lg:mr-0">Logout</a>

                <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler" class="block lg:hidden">
                    <ion-icon name="menu-outline" class="text-4xl text-blue-500"></ion-icon>
                </button>
            </div>
        </div>
    </div>
</header>
<section class="py-1 bg-blueGray-50">
<div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-40">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-base text-blueGray-700">Data supplier</h3>
        </div>
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
          <a href="<?php echo site_url('supplier/simpan')?>" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Input Data</a>
        </div>
      </div>
    </div>

    <div class="block w-full overflow-x-auto">
      <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
          <tr>
            <!-- <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Id supplier
                        </th> -->
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Product
                        </th>
           <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Total
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Date_insert
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Action
                        </th>
          </tr>
        </thead>

        <tbody>
        <?php foreach ($supplier as $c): ?>
          <tr>
            <!-- <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
            </th> -->
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            <?php echo $c->id_barang ?>
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            <?php echo $c->jumlah ?>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            <?php echo $c->tanggal_masuk ?>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            <a href="<?php echo site_url('supplier/ubah/' . $c->id_supplier)?>" class="bg-green-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Edit</a>
            <a href="<?php echo site_url('supplier/hapus/' . $c->id_supplier)?>" class="bg-red-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>

</section>