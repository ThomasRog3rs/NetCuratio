using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(NetCuratio.Startup))]
namespace NetCuratio
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
