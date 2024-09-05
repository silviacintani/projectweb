<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Input Data</h3>
    @if ($errors->any)
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item}}</li>
            @endforeach
        </ul>
    @endif
    <form action="/user/update/{{ $user->id }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" class="@error('name') error @enderror" id="" value="{{ $user->name }}"></td>
                <td>
                    @error('name')
                    {{$message}}
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" value="{{ $user->email }}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
                <td>
                    @error('password')
                    {{$message}}
                    @enderror
                </td>
            </tr>
            <tr class="mb-3">
                <td class="form-label">Level</td>
                <td>
                    <select name="levels_id" id="" class="form-select border-dark">
                        @foreach ($level_user as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_level}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="UBAH" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>