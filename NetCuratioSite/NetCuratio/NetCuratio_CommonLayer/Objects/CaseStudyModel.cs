using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_CommonLayer.Objects
{
    public class CaseStudyModel
    {
        public static List<CaseStudy> CaseStudies = new List<CaseStudy>() {
            new CaseStudy
            {
                Name = "KR Wellness",
                Id = "KRWellness",
                Url = "http://www.krwellness.co.uk/",
                Intro = "KR Wellness is a leading health and fitness specialist in the Manchester area. After establishing his...",
                Objective = "KR Wellness is a leading health and fitness specialist in the Manchester area. After establishing his brand on social media, it was clear that he required a strong and professional online presence to take his business to the next level. Our goal was to create a unique and professional digital brand that distinguished KR Wellness in the highly competitive fitness market. ",
                Problems = new List<(string, string)> { ( "Branding", "Early in our development process, it was clear to us that the 'wellness' aspect of the brand is what separated the business from the average fitness trainers in the area. We used this insight to create a website that expressed a holistic sense of wellbeing. This allowed KR Wellness to capitalise on a niche in the fitness market, which is over-saturated with gym equipment and protein shakes.  "), ("Follower conversion", "KR Wellness had already established a strong social media presence by the time they requested our help. To leverage their social media following and convert them into paying customers, we carefully designed them a site that engages their visitors from the moment that they land on the site and focuses them towards the main call to action. " )},
                WhatWeDid = "We incorporated some of the latest design and development techniques to achieve a modern, fully responsive, and search engine optimised digital experience.",
                Features = new List<string>(){"Mobile responsive design", "Focused branding",  "Content management", "Clear presentation of services", "Engaging social media templates"},
                HomeText = "As you can see from the landing page, we created a clean and unique design to expresses the 'wellness' aspect of the business. This has allowed KR Wellness to stand out against its competition, which mainly focuses on the muscles and iron aspects of fitness.  "

            },
            new CaseStudy
            {
                Name = "Naxian Castle",
                Id = "NaxianCastle",
                Url = "http://george.trwebdev.com",
                Intro = "Naxian Castle is a beautiful holiday destination in the Greek Islands. The owner of the location has...",
                Objective = "Naxian Castle is a beautiful holiday destination in the Greek Islands. The owner of the location has advertised with many popular booking companies for a long time but has been unable to leverage the full potential of the property. The goal of the website was to create a booking platform to effectively upsell holiday packages which included tours, activities, and meals out on the island.",
                Problems = new List<(string, string)> { ("Up-selling", "The key to maximizing profits, for Nexian castle, was to upsell the most profitable packages. To achieve this, we employed a data-driven design approach. This is where we utilise heat-maps and split-testing to optimise user engagement and clicks. This approach is a lot like designing a menu for a restaurant. The most profitable products are highlighted and placed on the parts of the page where the eye is naturally drawn. It's the perfect mixture of art and science. And it has a proven track record of maximizing sales." ), ( "Basket abandonment", "Basket abandonment is a massive problem for most e-commerce and booking websites. Data shows that as high as 87% of baskets get abandoned before checkout. For Naxian Castle, we integrated our custom basket journey into the site, which has a proven success rate, to ensure that profits were not lost to abandonment. This journey includes progress indicators and visible images of the purchase, throughout the checkout experience, as well as high authority payment providers, to prevent basket abandonment. These techniques have cut basket abandonment and boosted sales for Naxian Castle." ) },
                WhatWeDid = "We designed a highly optimised booking experience which up-sells profitable packages and add-on features. The site is beautifully designed and looks great on both desktop and mobile devices.",
                Features = new List<string>(){"Mobile responsive design", "Focused branding",  "Booking integration", "Checkout optimisation", "Features up-selling" },
                HomeText = "As you can see below, the theme that we designed for the website has emphasised the natural beauty of Nexian Castle. The booking bundles are promoted and the booking availability widget is accessible right at the start of the landing page. Nexian castle has seen a growth in bookings and profits from our work. Mission successful. "

            },
            new CaseStudy
            {
                Name = "Talk'N'Heal",
                Id = "TalkNHeal",
                Url = "http://stage4.trwebdev.com",
                Intro = "Talk N' Heal is a psychotherapy business that offers many different forms of therapy sessions...",
                Objective = "Talk N' Heal is a psychotherapy business that offers many different forms of therapy sessions. Our goal with the website was to create a strong and authoritative online presence for Talk N' Heal, to mark it out on the map as the legitimate enterprise that it is. We also wanted to create a managed booking solution for them, whereby customers could select the time and date of their session, thus eliminating a great deal of administrative overhead.",
                Problems = new List<(string, string)> { ("Bookings", "Talk N' Heal had struggled with their bookings for a long time, by the time that they asked for our help. Having to take and rearrange bookings over the phone, and keep them organised in a diary, was a massive administrative overhead for therapists trying to conduct sessions throughout the day. We solved this problem for them by creating an online booking solution that coordinates their availability for them. This has given the owners the time to focus on the aspects of their business that could benefit from their attention. ") , ("Approachable design", "We wanted to create a design, for Talk N' Heal, which gave the business the sense of authority that you would expect from a licensed professional but that also portrayed a sense of approachability to visitors. The last thing that we wanted to do was to intimidate people looking for help with their mental health. We managed to achieve this by creating a clean and modern design with a soft colour scheme. " ) },
                WhatWeDid = "We created a booking solution with easy purchase and checkout features for the customer. We created a clean and fully mobile responsive design.",
                Features = new List<string>(){"Mobile responsive design", "Focused branding",  "Booking soltuion", "Clear presentation of services", "Engaging social media templates" },
                HomeText = "As you can see below, the home page looks great in both the desktop and mobile views. The site is clean, modern, and portrays the sense of professionalism that our customer was looking for.  "

            }
        };
        public static CaseStudy GetCaseStudy(string studyId)
        {
            studyId = studyId.ToLower();
            foreach(var study in CaseStudies)
            {
                if(studyId == study.Id.ToLower())
                {
                    return study;
                }
            }
            return null;
        }
        public static List<CaseStudy> GetAllCaseStudies()
        {
            return CaseStudies;
        }
    }

    public class CaseStudy
    {
        public string Name { get; set; }
        public string Id { get; set; }
        public string Url { get; set; }
        public string Intro { get; set; }
        public string Objective { get; set; }
        public List<(string, string)> Problems { get; set; }
        public string WhatWeDid { get; set; }
        public List<string> Features { get; set; }
        public string HomeText { get; set; }
    }
}
