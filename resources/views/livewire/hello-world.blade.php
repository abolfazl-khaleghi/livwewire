<div>
سلام
<input wire:model.debounce.1000ms='name' type="text">
<input wire:model='ok' type="checkbox">
<select wire:model='grade' multiple>
    <option> سلام </option>
    <option> درود  </option>
    <option> تبریک </option>
</select>
{{-- $grade[0] --}}
{{implode(' , ',$grade)}} {{ $name}} خوبی ?
@if ($ok)
مرسی خیلی خوبم 😊❤🥰😍
@else
نه حالم خوب نیس🤢🤢🤢😫
@endif

</br>
{{-- <form action="#" wire:submit.prevent="$set('name','مهدی بیا')">
<button type="suvmit">
     پاک کردن فرم
</button>
</form> --}}
{{-- <button wire:click='resetname("name")' class="btn btn-info">پاک کردن </button> --}}
{{-- <button wire:click='resetname($event.target.innerText)' class="btn btn-info">پاک کردن </button> --}}

<form action="#" wire:submit.prevent=''>
    @csrf
    <input type="text" name="title" placeholder="تیتر خبر">
    <textarea placeholder="متن پست "></textarea>
    <input type="text" hidden value="Auth::user()->id">
    <input type="text" placeholder="توضیحات">
    <input type="image" name="image" >
    <button wire:submit>ارسال</button>
</form>
</div>
