<form action="<?= base_url('menu/editsubmenu'); ?>" method="POST">
    <!-- form group -->
    <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Title" value="<?= $subMenu['title']; ?>">
        </div>
        <div class="form-group">

            <Select name="menu_id" id="menu_id" class="form-control" hidden>
                <option value="">Select Menu</option>
                <?php foreach ($subMenu as $sm) : ?>
                    <option value="<?= $sm['id']; ?>"><?= $sm['menu']; ?></option>
                <?php endforeach; ?>
            </Select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?= $subMenu['url']; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon" value="<?= $subMenu['icon']; ?>">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                <label class="form-check-label" for="is_active">
                    Active?
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
    </div>
</form>