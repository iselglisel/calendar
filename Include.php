<script type="text/javascript">
        function trim(str) { 
             if(!str || typeof str != 'string')         
                return '';     
             return str.replace(/^[\s]+/,'').replace(/[\s]+$/,'').replace(/[\s]{2,}/,' '); 
        }
        
        function updateDays(){
            var year = document.getElementById("dob_y").value;
            var month = document.getElementById("dob_m").value;   
            
            var url = 'Days.php?year=' + trim(year) + '&month=' + trim(month);
            var objID = 'dob_d';
            var method = 'GET';
            makeRequest(method, url, objID);
         }
         
        function Display() {
            document.getElementById("sel_y").innerHTML = document.getElementById("dob_y").value ;
            document.getElementById("sel_m").innerHTML = document.getElementById("dob_m").value ;  
            document.getElementById("sel_d").innerHTML = document.getElementById("dob_day").value ;  
        }
</script>