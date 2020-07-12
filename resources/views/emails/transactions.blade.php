{{-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
		body,td,div,p,a,input {font-family: arial, sans-serif;}
	</style>
</head> --}}
{{-- <body style="margin: 0; padding: 0;">
	<table align="center" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #eee;">
 		<tr>
  			<td align="center" bgcolor="#D3D3D3" style="padding: 20px 0 30px 0; border-bottom: 5px solid #eee;">
 				<img src="{{asset('frontpage/image/4.png')}}" alt="Take it" style="display: block; width: 150px;"/>UD. Tumbuh Jati
			</td>
 		</tr>
 		<tr>
 			<p>{{$transaksi->user->name}}</p>
  		
		
 		</tr>
 		<tr>
  			<td style="font-family: Arial, sans-serif; font-size: 12px;">
				<tr>
				  <td bgcolor="#D3D3D3">
				   <p style="text-align: center; color: #000;">&copy; UD. Tumbuh Jati</p>
				  </td>
				 </tr>
  			</td>
 		</tr>
	</table>
</body>
</html> --}}
@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
