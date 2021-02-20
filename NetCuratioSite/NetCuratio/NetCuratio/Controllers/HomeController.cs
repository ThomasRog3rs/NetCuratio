using NetCuratio.Helpers;
using NetCuratio.Models;
using NetCuratio_CommonLayer.Objects;
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
            ViewBag.ShowSuccessMessage = false;
            ViewBag.Plans = PlansModel.GetAllPlans();

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
            ViewBag.ShowSuccessMessage = false;
                        ViewBag.Plans = PlansModel.GetAllPlans();

            return View();
        }

        [HttpGet]
        public ActionResult Contact()
        {
            ViewBag.CatchPhrase = PhrasesAndMessagesModel.CatchPhrase;
            ViewBag.ShowSuccessMessage = false;

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

                ViewBag.ShowSuccessMessage = true;
                

                return View("Contact", model); 
            }
            else
            {
                ViewBag.ShowSuccessMessage = false;
                return View("Contact", model);
            }
        }

        [HttpGet]
        public ActionResult RegisterInterest(string packageCode)
        {
            var model = new RegisterInterestViewModel
            {
                SelectedPackage = packageCode
            };

            model.PackageDetails = PlansModel.GetPlan(model.SelectedPackage);
            if(model.PackageDetails == null)
            {
                return RedirectToAction("Services", "Home");
            }

            return View(model);
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult RegisterInterest(RegisterInterestViewModel model)
        {
            model.PackageDetails = PlansModel.GetPlan(model.SelectedPackage);
            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TransformRegisterInterest(model);

                emailService.SendEmail(email);

                return RedirectToAction("Thanks",  "Home");
            }

            else
            {
                return View("RegisterInterest", model);
            }
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult EmailSignUp(EmailSignUpModel model)
        {
            if (ModelState.IsValid)
            {
                IEmailService emailService = new NetCuratio_ServiceLayer.Services.EmailService();

                var email = new EmailTransform().TransformEmailSignUp(model);

                ViewBag.ShowSuccessMessage = true;
                ViewBag.Section = "register";

                emailService.SendEmail(email);

                ViewBag.Plans = PlansModel.GetAllPlans();
                return View("Index");
            }
            else
            {
                ViewBag.ShowSuccessMessage = false;

                ViewBag.Plans = PlansModel.GetAllPlans();
                return View("Index");
            }
        }

        public ActionResult Thanks()
        {

            return View();
        }

        //public ActionResult Blog()
        //{
        //    ViewBag.CatchPhrase = "Beautiful websites, expertly made.";

        //    return View();
        //}

    }
}