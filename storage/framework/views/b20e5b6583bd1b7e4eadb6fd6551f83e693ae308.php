

<?php $__env->startSection('title', 'Daftar Buku'); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>
        <i class="bi bi-book"></i>
        Daftar Buku
    </h1>

    <div class="d-flex gap-2">
        <a href="<?php echo e(route('buku.export')); ?>" class="btn btn-success">
            <i class="bi bi-download"></i>
            Export CSV
        </a>

        <a href="<?php echo e(route('buku.create')); ?>" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            Tambah Buku
        </a>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card border-primary shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Total Buku</h6>
                <h2><?php echo e($totalBuku); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-success shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Buku Tersedia</h6>
                <h2><?php echo e($bukuTersedia); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-danger shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Buku Habis</h6>
                <h2><?php echo e($bukuHabis); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <h6 class="mb-3">
            <i class="bi bi-funnel"></i>
            Filter Kategori
        </h6>

        <div class="d-flex flex-wrap gap-2">
            <a href="<?php echo e(route('buku.index')); ?>" class="btn btn-sm btn-outline-primary">
                Semua
            </a>

            <a href="<?php echo e(route('buku.kategori', 'Programming')); ?>" class="btn btn-sm btn-outline-primary">
                Programming
            </a>

            <a href="<?php echo e(route('buku.kategori', 'Database')); ?>" class="btn btn-sm btn-outline-primary">
                Database
            </a>

            <a href="<?php echo e(route('buku.kategori', 'Web Design')); ?>" class="btn btn-sm btn-outline-primary">
                Web Design
            </a>

            <a href="<?php echo e(route('buku.kategori', 'Networking')); ?>" class="btn btn-sm btn-outline-primary">
                Networking
            </a>

            <a href="<?php echo e(route('buku.kategori', 'Data Science')); ?>" class="btn btn-sm btn-outline-primary">
                Data Science
            </a>
        </div>
    </div>
</div>

<form action="<?php echo e(route('buku.bulk-delete')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <input type="checkbox" id="select-all">
                <label for="select-all">Pilih Semua</label>
            </div>

            <button
                type="submit"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus buku yang dipilih?')"
            >
                <i class="bi bi-trash"></i>
                Hapus Terpilih
            </button>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th width="50"></th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Pengarang</th>
                        <th>Stok</th>
                        <th width="220">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $bukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <input
                                    type="checkbox"
                                    name="buku_ids[]"
                                    value="<?php echo e($buku->id); ?>"
                                >
                            </td>

                            <td><?php echo e($buku->kode_buku); ?></td>
                            <td><?php echo e($buku->judul); ?></td>
                            <td><?php echo e($buku->kategori); ?></td>
                            <td><?php echo e($buku->pengarang); ?></td>
                            <td><?php echo e($buku->stok); ?></td>

                            <td>
                                <a
                                    href="<?php echo e(route('buku.show', $buku->id)); ?>"
                                    class="btn btn-info btn-sm text-white"
                                >
                                    Detail
                                </a>

                                <a
                                    href="<?php echo e(route('buku.edit', $buku->id)); ?>"
                                    class="btn btn-warning btn-sm"
                                >
                                    Edit
                                </a>

                                <form
                                    action="<?php echo e(route('buku.destroy', $buku->id)); ?>"
                                    method="POST"
                                    class="d-inline delete-form"
                                >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm btn-delete"
                                        data-judul="<?php echo e($buku->judul); ?>"
                                    >
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center">
                                Tidak ada data buku.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</form>

<?php if($bukus->count() > 0): ?>
    <div class="text-center mt-3">
        <p class="text-muted">
            Menampilkan <?php echo e($bukus->count()); ?> buku
        </p>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    document.getElementById('select-all').addEventListener('change', function () {
        document.querySelectorAll('input[name="buku_ids[]"]').forEach(cb => {
            cb.checked = this.checked;
        });
    });

    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function () {

            const form = this.closest('form');
            const judul = this.dataset.judul;

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: `Apakah Anda yakin ingin menghapus buku "${judul}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\perpustakaan-9\resources\views/buku/index.blade.php ENDPATH**/ ?>