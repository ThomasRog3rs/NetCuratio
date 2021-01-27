using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace NetCuratio.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

            return View();
        }

        public ActionResult About()
        {
            ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

            return View();
        }

        public ActionResult Services()
        {
            ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

            return View();
        }

        //public ActionResult Blog()
        //{
        //    ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

        //    return View();
        //}
    }
}