<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h1>Send you mail</h1>

        <form action="{{ route('form5') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                @error('name')
                <small class="invalid-feedback" >{{$message}}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                @error('email')
                <small class="invalid-feedback" >{{$message}}</small>
                @enderror
            </div>

            {{-- if(old('type_subject') == 'Normail'){
                echo 'checked';
            }else{
                echo '';
            } --}}



            <div class="mb-3">
                <label>Type Subject</label><br>
                <label><input {{(old('type_subject') == 'Normail') ? 'checked' : '';}} type="radio" name="type_subject" value="Normail">Normail</label><br>
                <label><input {{(old('type_subject') == 'Specil') ? 'checked' : '';}} type="radio" name="type_subject" value="Specil">Specil</label>
            </div>
{{--
            @dump(old('hoppies'))
            in_array --}}

            <div class="mb-3">
                <label>Hoppies</label><br>
                <label class="mx-3"><input type="checkbox"  {{ old('hoppies') && in_array('Football',old('hoppies')) ?  'checked' : ''; }} value="Football" name="hoppies[]">Football</label>
                <label class="mx-3"><input type="checkbox"  {{ old('hoppies') && in_array('Vollyball',old('hoppies')) ?  'checked' : ''; }} value="Vollyball" name="hoppies[]">Vollyball</label>
                <label class="mx-3"><input type="checkbox"  {{ old('hoppies') && in_array('backetball',old('hoppies')) ?  'checked' : ''; }} value="backetball" name="hoppies[]">backetball</label>
                <label class="mx-3"><input type="checkbox"  {{ old('hoppies') && in_array('taines',old('hoppies')) ?  'checked' : ''; }} value="taines" name="hoppies[]">taines</label>
            </div>

            <div class="mb-3">
                <label>Your Study</label>
                <select name="study" class="form-control form-select">
                    <option value="Diplome">Diplome</option>
                    <option value="Bacholer">Bacholer</option>
                    <option value="master">master</option>
                    <option value="PHD">PHD</option>
                    <option value="Prof">Prof</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Subject</label>
                <input type="text" name="subject" placeholder="Subject" class="form-control @error('subject') is-invalid @enderror">
                @error('subject')
                <small class="invalid-feedback" >{{$message}}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message" rows="5">{{old('message')}}</textarea>
            </div>

            <div class="mb-3">
                <label>Your CV</label>
                <input type="file" name="cv" class="form-control @error('cv') is-invalid @enderror">
                @error('cv')
                <small class="invalid-feedback" >{{$message}}</small>
                @enderror
            </div>



            <button class="btn btn-success w-25 mt-4">Send</button>
        </form>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
