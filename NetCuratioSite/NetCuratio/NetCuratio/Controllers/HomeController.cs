using NetCuratio.Helpers;
using NetCuratio.Models;
using NetCuratio_ServiceLayer.IServices;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Mail;
using System.Web;
using System.Web.Mvc;

namespace NetCuratio.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;
            ViewBag.ValidEmail = true;

            var model = new EmailSignUpModel();
            return View(model);
        }

        public ActionResult About()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;

            return View();
        }


        public ActionResult Services()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;

            return View();
        }

        [HttpGet]
        public ActionResult Contact()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;

            var model = new ContactViewModel();

            return View(model);
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Contact(ContactViewModel model)
        {
            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TranformContactMessage(model);

                emailService.SendEmail(email);

                var thanksMessage = PhrasesAndMessagesModel.ContactThanksMessage;

                return RedirectToAction("Thanks", "Home", new { message = thanksMessage });
            }
            else
            {
                return View("Contact", model);
            }
        }

        [HttpGet]
        public ActionResult RegisterInterest(string packageCode)
        {
            var model = new RegisterInterestViewModel();
            model.SelectedPackage = packageCode;

            return View(model);
        }

        [HttpPost]
        public ActionResult RegisterInterest(RegisterInterestViewModel model)
        {
            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TransformRegisterInterest(model);

                emailService.SendEmail(email);

                var thanksMessage = PhrasesAndMessagesModel.RegisterInterestThanksMessage;

                return RedirectToAction("Thanks",  "Home", new { message = thanksMessage });
            }

            else
            {
                return View("RegisterInterest", model);
            }
        }

        [HttpPost]
        public ActionResult EmailSignUp(EmailSignUpModel model)
        {
            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TransformEmailSignUp(model);

                emailService.SendEmail(email);

                var thanksMessage = PhrasesAndMessagesModel.EmailSignUpThanksMessage;

                return RedirectToAction("Thanks", "Home", new { message = thanksMessage });
            }
            else
            {
                ViewBag.ValidEmail = false;
                return View("Index");
            }
        }

        public ActionResult Thanks(string message)
        {
            ViewBag.ThanksMessage = message;

            return View();
        }

        //public ActionResult Blog()
        //{
        //    ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

        //    return View();
        //}

    }
}