using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace NetCuratio_CommonLayer.Objects
{
    public class DocsModel
    {
        static int truncateAt = 100;

        public static List<Doc> Docs = new List<Doc>() {
            new Doc
            {
                Title = "Agency Theme - how to use",
                Id = "agency-theme",
                Date = "07/07/2021",
                Author = "Thomas Rogers",
                Body = "<h2>This is the body</h2><p>Lorem ipsum dolor...</p><p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra augue.</p>"
            }
        };
        public static Doc GetDoc(string docId)
        {
            docId = docId.ToLower();
            foreach (var doc in Docs)
            {
                if (docId == doc.Id.ToLower())
                {
                    return doc;
                }
            }
            return null;
        }
        public static List<Doc> GetAllDocs()
        {
            return Docs;
        }

        private static string TruncateAtWord(string value, int length)
        {
            if (value == null || value.Length < length || value.IndexOf(" ", length) == -1)
                return value;

            return value.Substring(0, value.IndexOf(" ", length));
        }
    }

    public class Doc
    {
        public string Title { get; set; }
        public string Id { get; set; }
        public string Date { get; set; }
        public string Author { get; set; }
        public string Body { get; set; }
    }

}
