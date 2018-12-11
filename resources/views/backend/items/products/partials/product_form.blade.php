@csrf
<div class="control-group">
    <label class="control-label" for="date01">نام محصول:</label>
    <div class="controls">
        <input type="text" class="input-xlarge" name="product_name" id="date01"
               value="{{old('product_name',isset($product->product_name)?$product->product_name:'' )}}"
               placeholder="محصول">
    </div>
</div>

<div class="control-group hidden-phone">
    <label class="control-label" for="textarea1">توضیحات محصول:</label>
    <div class="controls">
        <textarea class="form-control" name="product_desc" id="textarea1"
                  rows="3">{{old('product_desc',isset($product->product_desc)?$product->product_desc:'')}}</textarea>
    </div>
</div>

<div class="control-group hidden-phone">
    <label class="control-label" for="textarea2">جزئیات محصول:</label>
    <div class="controls">
                                <textarea class="cleditor" name="product_description" id="textarea2"
                                          rows="3">{{old('product_description',isset($product->product_description)?$product->product_description:'')}}</textarea>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="selectError3">رنگ محصول:</label>
    <div class="controls">
        <select id="selectError3" name="product_color">
            <option value="red" {{isset($product->product_color)&&$product->product_color == "red"?'selected':''}}>قرمز
            </option>
            <option value="green" {{isset($product->product_color)&&$product->product_color == "green"?'selected':''}}>
                سبز
            </option>
            <option value="blue" {{isset($product->product_color)&&$product->product_color == "blue"?'selected':''}}>
                آبی
            </option>
            <option value="yellow" {{isset($product->product_color)&&$product->product_color == "yellow"?'selected':''}}>
                زرد
            </option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="appendedInput">قیمت محصول:</label>
    <div class="controls">
        <div class="input-append">
            <input id="appendedInput" size="16" type="text" name="product_price"
                   value="{{old('product_price',isset($product->product_price)?$product->product_price:0)}}"><span
                    class="add-on">0</span>
        </div>
        <span class="help-inline">به تومان</span>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="appendedInput1">تعداد محصول:</label>
    <div class="controls">
        <div class="input-append">
            <input id="appendedInput1" size="16" min="0" type="number" name="product_qty"
                   value="{{old('product_qty',isset($product->product_qty)?$product->product_qty:0)}}">
        </div>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="selectError">برند محصول:</label>
    <div class="controls">
        <select id="selectError" data-rel="chosen" name="brand_id">
            @if(isset($brands))
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>


<div class="control-group">
    <label class="control-label" for="selectError222">دسته بندی:</label>
    <div class="controls">
        <select id="selectError222" data-rel="chosen" name="cat_id">
            <option class="text-right text-success " value="0" >بدون دسته بندی</option>
            @if(isset($categories))
                @foreach($categories as $category)
                    <option class="text-right text-success " value="{{$category->id}}" >{{$category->cat_name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="selectError2222">زیر دسته بندی:</label>
    <div class="controls">
        <select id="selectError2222" data-rel="chosen" name="sub_cat_id">
            <option class="text-right text-success active" value="0" checked>بدون زیر دسته</option>
            @if(isset($categories))
                @foreach($categories as $category)
                    @foreach($category->subcategories()->get() as $sub)
                        @if(count($category->subcategories()->get())>0)
                            <option class="text-right text-success " value="{{$sub->id}}">{{$sub->sub_cat_name }}</option>
                        @endif
                    @endforeach
                @endforeach
            @endif
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="selectError33">تگ:</label>
    <div class="controls">
        <select id="selectError33" data-rel="chosen" name="tag_id">
            @if(isset($tags))
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="date04">عکس محصول:</label>
    <div class="controls">
        <input type="file" accept=".jpg, .jpeg, .png" class="input-xlarge" name="product_img" id="date04" value="">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="date05">عکس پیشنهاد ویژه:</label>
    <div class="controls">
        <input type="file" accept=".jpg, .jpeg, .png" class="input-xlarge" name="product_offer_img" id="date05"
               value="">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="optionsCheckbox2">وضعیت انتشار:</label>
    <div class="controls">
        <label class="checkbox">
            <input type="checkbox" id="optionsCheckbox2" name="product_status"
                   value="1" {{isset($product->product_status)&&$product->product_status==1?'checked':''}}>
        </label>
    </div>
</div>


