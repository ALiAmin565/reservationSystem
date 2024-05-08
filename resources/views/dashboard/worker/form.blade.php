<div class="row mb-3">
    <label class="col-sm-2 col-form-label">   عدد العمال المسائي</label>
    <div class="col-sm-10">
        <input type="number" name="persons_number_evening" class="form-control" step="1" placeholder="ادخل رقم"
            min="1" max="1000" value="{{ $worker->persons_number_evening }}">
    </div>
</div>
<div class="row mb-3">
    <label class="col-sm-2 col-form-label"> عدد العمال الصباحي</label>
    <div class="col-sm-10">
        <input type="number" name="persons_number_morning" class="form-control" step="1" placeholder="ادخل رقم"
            min="1" max="1000" value="{{ $worker->persons_number_morning }}">
    </div>
</div>
