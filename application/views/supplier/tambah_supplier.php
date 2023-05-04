<script src="https://cdn.tailwindcss.com"></script>
<!-- favicon link -->
<link rel="shortcut icon" href="https://media.discordapp.net/attachments/963226363362422794/1049199082515742781/iconlogo.png" type="image/x-icon">
<div class="min-h-screen bg-indigo-900 flex justify-center items-center">
    <title>Tambah Data Supplier</title>

	

	<form action="<?php echo site_url('supplier/simpan') ?>" method="POST">
	<div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
	<div>
			<h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Tambah Data Supplier</h1>
		</div>
		
		<div class="space-y-4">
        <select name="id_barang" id="" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none">
                        <option value="">--> Pilih Barang <-- </option>
                                <?php foreach ($list as $s) : ?>
                        <option value="<?= $s->id_barang  ?>"><?= $s->nama_barang ?>/<?= $s->jenis_barang ?></option>
                    <?php endforeach; ?>
                    </select>

        <?php echo form_error('id_supplier') ?>

        <input type="text" placeholder="Input Jumlah Barang" name="jumlah" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none <?php echo form_error('jumlah') ? 'is-invalid' : '' ?>" /> <?php echo form_error('jumlah') ?>


                </div>
			<div class="text-center mt-6">  
				<input value="SAVE" type="submit" class="py-3 w-64 text-xl text-white bg-green-500 rounded-2xl"></input>
			</div>
		</div>
		
	</form>
	
	</div>