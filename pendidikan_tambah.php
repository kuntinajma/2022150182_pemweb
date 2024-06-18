<div class="card mx-auto" style="width: 30em;">
    <div class="card-body">
        <br>
        <h1>Tambah Pendidikan</h1>
        <form action="pendidikan_simpan.php" method="post">
            <label class="form-label" for="">Jenjang</label>
            <select class="form-select mb-3" name="jenjang" id="Jenjang">
                <option value="">--Pilih jenjang pendidikan--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S-1">S-1</option>
                <option value="S-2">S-2</option>
                <option value="S-3">S-3</option>
            </select>
            <label class="form-label">Nama Sekolah</label>
            <input class="form-control mb-3" type="text" name="nama_sekolah" id="">
            <label class="form-label">Tahun Lulus</label>
            <input class="form-control mb-3" type="number" name="tahun_lulus" id="">
            <input class="btn btn-success" type="submit" value="SIMPAN DATA">
        </form>
    </div>
</div>