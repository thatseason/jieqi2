document.write('<select name=bcolor id=bcolor onchange="javascript:saveSet(),document.getElementById(\'htmlContent\').style.backgroundColor=this.options[this.selectedIndex].value;"><option style="background-color: #ffffff" value="#ffffff">��ɫ</option><option style="background-color: #ffffff" value="#ffffff">Ĭ��</option>			  <option style="background-color: #ffffff" value="#ffffff">��ɫ</option>              <option style="background-color: #e3e8f7" value="#e3e8f7">����</option>			  <option style="background-color: #daebfc" value="#daebfc">��ɫ</option>              <option style="background-color: #ebeaea" value="#ebeaea">����</option>              <option style="background-color: #e7e3e6" value="#e7e3e6">��ɫ</option>              <option style="background-color: #dedcd8" value="#dedcd8">���</option>              <option style="background-color: #d8d7d7" value="#d8d7d7">����</option>              <option style="background-color: #e6ede6" value="#e6ede6">��ɫ</option>              <option style="background-color: #f0e8d8" value="#f0e8d8">����</option>                   </select>			  <select name=txtcolor id=txtcolor onchange="javascript:saveSet(),document.getElementById(\'htmlContent\').style.color=this.options[this.selectedIndex].value;"> 			 <option value="">��ɫ</option>      <option value="#000000">��ɫ</option>              <option value="#ff0000">��ɫ</option>              <option value="#006600">��ɫ</option>              <option value="#0000ff">��ɫ</option>              <option value="#660000">��ɫ</option>			  </select>              <select name=fonttype id=fonttype onchange="javascript:saveSet(),document.getElementById(\'htmlContent\').style.fontSize=this.options[this.selectedIndex].value;"> 		<option value="24px" >�ֺ�</option>	  <option value="12px" >С��</option> 			  <option value="14px" >��С</option> 			  <option value="16px" >�к�</option>			  <option value="18px" >�ϴ�</option>			  <option value="24px" >���</option>			  </select>          <select name=scrollspeed id=scrollspeed onchange="javascript:saveSet(),setSpeed(this.value)"> 			 <option value="5">����</option>   		<option value="1">1</option>		<option value="2">2</option>		<option value="3">3</option>	<option value="4">4</option>	<option value="5">5</option>	<option value="6">6</option>	<option value="7">7</option>	<option value="8">8</option>   <option value="9">9</option>  <option value="10">10</option>   	  </select> 	                       ');


//<input name=scrollspeed id=scrollspeed onchange="javascript:saveSet(),setSpeed();" size=2 value=5> 