{{-- Edit Lainnya --}}
<div class="modal fade" id="data-dokumen-lain-edit-modals-{{ $docs->id }}" tabindex="-1" role="dialog"
    aria-labelledby="data-lainnya-modalsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="data-lainnya-modalsTitle">Dokumen Lainnya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('pegawai.data-dokumen-lain.update', $docs->id ?? '') }}"
                    id="update-form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $docs->id ?? '' }}">
                    <input type="hidden" id="nama_pegawai" name="nama_pegawai" value="{{ $pegawais->nama_pegawai }}">
                    <input type="hidden" id="pegawai_id" name="pegawai_id" value="{{ $pegawais->id }}">

                    <div class="form-group">
                        <label for="jenis_dokumen"><strong>Jenis Dokumen</strong></label>
                        <select name="jenis_dokumen" id="jenis_dokumen" class="form-control select2">
                            <option value="">Pilih Jenis Dokumen</option>
                            <option value="Sertifikat Orientasi"
                                {{ old('jenis_dokumen', $docs->jenis_dokumen ?? '') == 'Sertifikat Orientasi' ? 'selected' : '' }}>
                                Sertifikat Orientasi</option>
                            <option value="Uraian Tugas"
                                {{ old('jenis_dokumen', $docs->jenis_dokumen ?? '') == 'Uraian Tugas' ? 'selected' : '' }}>
                                Uraian Tugas</option>
                            <option value="Penilaian Kinerja"
                                {{ old('jenis_dokumen', $docs->jenis_dokumen ?? '') == 'Penilaian Kinerja' ? 'selected' : '' }}>
                                Penilaian Kinerja</option>
                            <option value="Medical Check Up"
                                {{ old('jenis_dokumen', $docs->jenis_dokumen ?? '') == 'Medical Check Up' ? 'selected' : '' }}>
                                Medical Check Up</option>
                        </select>
                    </div>
                    @error('jenis_dokumen')
                        <p style="color: red">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="dokumen">Dokumen</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="dokumen" name="dokumen">
                            <label class="custom-file-label" for="dokumen">Upload Dokumen</label>
                        </div>
                        @if (isset($docs->dokumen))
                            <small class="text-muted">Current file:
                                {{ basename($docs->dokumen) }}</small>
                        @endif
                        @error('dokumen')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
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
