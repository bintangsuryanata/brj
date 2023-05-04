<script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-screen bg-indigo-900 flex justify-center items-center">
	

	<form action="<?php echo site_url('barang/simpan') ?>" method="POST">
	<div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
	<div>
			<h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Tambah Data barang</h1>
		</div>
		
		<div class="space-y-4">
        <input type="text" placeholder="Input Nama Barang" name="nama_barang" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none <?php echo form_error('nama_barang') ? 'is-invalid' : '' ?>" value="<?php echo $barang->nama_barang ?>" />
        <input type="text" placeholder="Input Jenis Barang" name="jenis_barang" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none <?php echo form_error('jenis_barang') ? 'is-invalid' : '' ?>" value="<?php echo $barang->jenis_barang ?>" />

		<input type="text" placeholder="Input Stok Barang" name="stok" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none <?php echo form_error('stok') ? 'is-invalid' : '' ?>" value="<?php echo $barang->stok ?>" />
        <input type="text" placeholder="Input Harga Barang" name="harga" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none <?php echo form_error('harga') ? 'is-invalid' : '' ?>" value="<?php echo $barang->harga ?>" />


                </div>
			<div class="text-center mt-6">
				<input value="SAVE" type="submit" class="py-3 w-64 text-xl text-white bg-green-500 rounded-2xl"></input>
			</div>
		</div>
		
	</form>
	
	</div>