<h2 class="row30">Add a new message</h2>
<form action="{{ route('messages.update', $participant->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}
        
    <!-- Message Form Input -->
    <div class="form-group">
        <textarea name="message" class="form-control" style="height:150px!important">{{ old('message') }}</textarea>
    </div>


    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </div>
</form>