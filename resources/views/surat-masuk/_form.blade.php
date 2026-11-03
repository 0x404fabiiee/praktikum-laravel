<p>
    <label>Nomor Surat</label><br>
    <input type="text" name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat ?? '') }}">
    @error('nomor_surat') <br><span style="color:red">{{ $message }}</span> @enderror
</p>
<p>
    <label>Tanggal</label><br>
    <input type="date" name="tanggal" value="{{ old('tanggal', isset($surat) ? \Illuminate\Support\Carbon::parse($surat->tanggal)->format('Y-m-d') : '') }}">
    @error('tanggal') <br><span style="color:red">{{ $message }}</span> @enderror
</p>
<p>
    <label>Pengirim</label><br>
    <input type="text" name="pengirim" value="{{ old('pengirim', $surat->pengirim ?? '') }}">
    @error('pengirim') <br><span style="color:red">{{ $message }}</span> @enderror
</p>
<p>
    <label>Perihal</label><br>
    <input type="text" name="perihal" value="{{ old('perihal', $surat->perihal ?? '') }}">
    @error('perihal') <br><span style="color:red">{{ $message }}</span> @enderror
</p>
<p>
    <label>Keterangan</label><br>
    <textarea name="keterangan" rows="3">{{ old('keterangan', $surat->keterangan ?? '') }}</textarea>
    @error('keterangan') <br><span style="color:red">{{ $message }}</span> @enderror
</p>