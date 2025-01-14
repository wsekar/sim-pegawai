
<div class="modal fade" id="data-sip-edit-modals-<?php echo e($sip->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="data-sip-modalsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="data-sip-modalsTitle">Surat Izin Profesi (STR/SIP/SIPA/DLL)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('pegawai.data-surat-izin-profesi.update', $sip->id ?? '')); ?>"
                    id="update-form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" name="id" id="id" value="<?php echo e($sip->id ?? ''); ?>">
                    <input type="hidden" id="nama_pegawai" name="nama_pegawai"
                        value="<?php echo e($sip->pegawai->nama_pegawai ?? ''); ?>">
                    <input type="hidden" id="pegawai_id" name="pegawai_id" value="<?php echo e($sip->pegawai->id ?? ''); ?>">

                    <div class="form-group">
                        <label for="jenis_dokumen"><strong>Jenis Dokumen</strong></label>
                        <select name="jenis_dokumen" id="jenis_dokumen" class="form-control select2">
                            <option value="">Pilih Jenis Dokumen</option>
                            <option value="STR"
                                <?php echo e(old('jenis_dokumen', $sip->jenis_dokumen ?? '') == 'STR' ? 'selected' : ''); ?>>
                                STR</option>
                            <option value="SIP"
                                <?php echo e(old('jenis_dokumen', $sip->jenis_dokumen ?? '') == 'SIP' ? 'selected' : ''); ?>>
                                SIP</option>
                            <option value="SIPA"
                                <?php echo e(old('jenis_dokumen', $sip->jenis_dokumen ?? '') == 'SIPA' ? 'selected' : ''); ?>>
                                SIPA</option>
                        </select>
                    </div>
                    <?php $__errorArgs = ['jenis_dokumen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p style="color: red"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="form-group">
                        <label for="no_sertifikat"><strong>Nomor Sertifikat<span
                                    style="color: red">*</span></strong></label>
                        <input type="text" name="no_sertifikat" id="no_sertifikat" class="form-control"
                            placeholder="Nomor Sertifikat"
                            value="<?php echo e(old('no_sertifikat', $sip->no_sertifikat ?? '')); ?>">
                        <?php $__errorArgs = ['no_sertifikat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p style="color: red"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_mulai">Tanggal Mulai Berlaku</label>
                                <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"
                                    value="<?php echo e(old('tgl_mulai', $sip->tgl_mulai ?? '')); ?>">
                                <?php $__errorArgs = ['tgl_mulai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="color: red"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_selesai">Tanggal Berakhir</label>
                                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"
                                    value="<?php echo e(old('tgl_selesai', $sip->tgl_selesai ?? '')); ?>">
                                <?php $__errorArgs = ['tgl_selesai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="color: red"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dokumen">Dokumen</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="dokumen" name="dokumen">
                            <label class="custom-file-label" for="dokumen">Upload Dokumen</label>
                        </div>
                        <?php if(isset($sip->dokumen)): ?>
                            <small class="text-muted">Current file:
                                <?php echo e(basename($sip->dokumen)); ?></small>
                        <?php endif; ?>
                        <?php $__errorArgs = ['dokumen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p style="color: red"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button type="reset" class="btn btn-danger btn-md"><span class="fe fe-12 fe-x"></span>
                        Reset</button>
                    <button type="submit" class="btn btn-success btn-md"><span class="fe fe-12 fe-save"></span>
                        Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\kepegawaian-crud-spatie2\resources\views/admin/master/pegawai/modals/surat_izin_profesi_edit_modals.blade.php ENDPATH**/ ?>