            @csrf
            <div class="control-group">
                <label class="control-label" for="date01">tag name:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="tag_name" id="date01" value="{{old('tag_name',isset($tag->tag_name)?$tag->tag_name:'' )}}"
                           placeholder="tag">
                </div>
            </div>



