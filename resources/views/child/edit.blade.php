@extends('layout.app')

@section('content')
<div class="edit">  
    <form action="{{ url('/child/update/'. $content_row->id) }}" method="POST" enctype="multipart/form-data">
        @csrf     
        <div class="title">
            <label>Title</label>
            <div class="form">  
                <input type="hidden" name="id" value="{{ $content_row->id }}">
                <input type="hidden" name="child_id" value="{{ $content_row->child_id}}">              
                <input class="title" type="text" value="{{ $content_row->title }}" name="title" placeholder="Title...">
            </div>
        </div>
        <div>
            <label>Description</label> 
            <div class="form">
                <textarea type="textarea" name="description"  placeholder="Description...">{{ $content_row->description }}</textarea>
            </div>          
        </div>
        <div>
            <table class="create_form">
                <tr>
                    <td class="td_form">
                        <div>
                            <label>Date</label>
                            <div>
                                <input class="date" type="date" name="date" value="YYYMMDD" >
                            </div>
                        </div>
                    </td>
                    <td class="td_form">
                        <div>
                            <label>Location</label>
                            <div>
                                <input class="location" type="text" value="{{ $content_row->location }}" name="location" placeholder="Location...">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="category_select">
                            <select name="content_type_id">
                                @foreach ($content_types as $content_type)
                                    <option value="{{ $content_type->id}}">{{ $content_type->name }}</option>     
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>Select image to upload:</label>
                            <div>
                                <input type="file" name="fileToUpload">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div >
                <button class="button_submit" type="submit">Update</button>
            </div>
        </div>
    </form>
</div>

@endsection