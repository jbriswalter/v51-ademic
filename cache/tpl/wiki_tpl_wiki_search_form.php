<?php $_result='<div class="form-element">
    <label for="WikiWhere">' . $_data->get('L_WHERE') . '</label>
    <div class="form-field">
        <select id="WikiWhere" name="WikiWhere" class="search_field">
            <option value="title" ' . $_data->get('IS_TITLE_SELECTED') . '>' . $_data->get('L_TITLE') . '</option>
            <option value="contents" ' . $_data->get('IS_CONTENTS_SELECTED') . '>' . $_data->get('L_CONTENTS') . '</option>
            <option value="all" ' . $_data->get('IS_ALL_SELECTED') . '>' . $_data->get('L_TITLE') . ' / ' . $_data->get('L_CONTENTS') . '</option>
        </select>
    </div>
</div>'; ?>