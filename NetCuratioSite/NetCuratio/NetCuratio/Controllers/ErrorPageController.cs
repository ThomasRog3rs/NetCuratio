﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace NetCuratio.Controllers
{
    public class ErrorPageController : Controller
    {
        // GET: ErrorPage
        public ActionResult Error(int statusCode, Exception exception)
        {
            Response.StatusCode = statusCode;
            ViewBag.StatusCode = statusCode + " Error";
            return View();
        }
    }
}