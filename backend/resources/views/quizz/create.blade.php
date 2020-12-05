@extends("layout.layout")

@section("content")
    <div>
        <form  method="post" enctype="multipart/form-data" action="{{route('quizz.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">question</label>
                    <label>
                        <input type="text" class="form-control @error('question') 'is-invalid' @enderror"  placeholder="input" name="question">
                    </label>
                    @error('question')
                    <p class="text-danger">{{ $errors->first('question') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">answer1</label>
                    <label>
                        <input type="text" class="form-control @error('answer1') 'is-invalid' @enderror"  placeholder="input" name="answer1">
                    </label>
                    @error('answer1')
                    <p class="text-danger">{{ $errors->first('answer1') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">answer2</label>
                    <label>
                        <input type="text" class="form-control @error('answer2') 'is-invalid' @enderror"  placeholder="input" name="answer2">
                    </label>
                    @error('answer2')
                    <p class="text-danger">{{ $errors->first('answer2') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">answer3</label>
                    <label>
                        <input type="text" class="form-control @error('answer3') 'is-invalid' @enderror"  placeholder="input" name="answer3">
                    </label>
                    @error('answer3')
                    <p class="text-danger">{{ $errors->first('answer3') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">answer4</label>
                    <label>
                        <input type="text" class="form-control @error('answer4') 'is-invalid' @enderror"  placeholder="input" name="answer4">
                    </label>
                    @error('answer4')
                    <p class="text-danger">{{ $errors->first('answer4') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">correct answer</label>
                    <label>
                        <input type="text" class="form-control @error('correct_answer') 'is-invalid' @enderror"  placeholder="input" name="correct_answer">
                    </label>
                    @error('correct_answer')
                    <p class="text-danger">{{ $errors->first('correct_answer') }}</p>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
