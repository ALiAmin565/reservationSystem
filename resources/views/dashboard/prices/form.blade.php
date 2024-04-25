<div class="row mb-3">
    <label class="col-sm-2 col-form-label">السعر للشخص </label>
    <div class="col-sm-10">
        <input type="number" step="1" min="1" max="1000" name="person_price" class="form-control"
        placeholder="12"  value="{{ $price->person_price }}" required>
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">سعر الزياره</label>
    <div class="col-sm-10">
        <input type="number" step="1" name="visit_price" class="form-control" min="1" max="1000"
        placeholder="12"      value="{{ $price->visit_price }}">
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">سعر الساعه</label>
    <div class="col-sm-10">
        <input type="number" name="hour_price" class="form-control" step="1"
            placeholder="12" min="1" max="1000"
            value="{{ $price->hour_price }}">
    </div>
</div>
