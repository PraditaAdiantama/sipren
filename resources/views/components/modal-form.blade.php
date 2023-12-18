<dialog id="{{ $id }}" class="modal-3">
    <h3>Apakah Anda yakin ingin Logout?</h3>
    <div>
        <form action="" class="form">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Masukan username">
            </div>
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Masukan username">
            </div>
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Masukan username">
            </div>
        </form>
        <div>
            <button onclick="{{ $id }}.close()">Batal</button>
            <button>Logout</button>
        </div>
    </div>
</dialog>
