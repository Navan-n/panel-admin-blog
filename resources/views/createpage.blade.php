<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method="POST" action="/pages/store">
                @csrf
                <div>
                    <label
                           for="title">
                        عنوان صفحه
                    </label>
                    <input 
                           type="text"
                           name="title"
                           id="title"
                           value="{{ old('title') }}"
                           required>
                           @error('title')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label
                           for="slug">
                        لینک کوتاه
                    </label>
                    <input 
                           type="text"
                           name="slug"
                           id="slug"
                           value="{{ old('slug') }}"
                           required>
                           @error('slug')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label
                           for="body">
                        توضیح صفحه 
                    </label>
                    <textarea
                              name="body"
                              id="body"
                              required>
                        {{old('body')}}
                    </textarea>
                    @error('body')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                
            
                <button type="submit">Submit</button>
            </form>
    </body>
</html>