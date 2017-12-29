/**
 * Created by Administrator on 2017/8/4.
 */
function check(URL,l_url){
    $("#demo2").click(function () {
        $.ajax({
            type: "POST",
            url: URL,
            data: $("#login").serialize(),
            success: function (data) {
                //alert(data);
                if (data == 1) {
                    toastr.success("欢迎使用本系统", "登陆成功");
                    location.href = l_url;
                } else if(data==0) {
                    toastr.error("验证码输入错误", "登陆失败");
                }else if(data==2){
                    toastr.error("账号或密码错误，请检查账号密码", "登陆失败");
                }else {
                    toastr.error("账号已被锁定，请联系管理员", "登陆失败");
                }
            },
            error: function () {
                toastr.error("账号或密码错误，请检查账号密码", "登陆失败");
            },
        });
    });
}

