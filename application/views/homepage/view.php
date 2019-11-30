
        <div style="width: 100%; max-width: 800px; margin: 0 auto;">

           

                <div class="js-result-container"></div>

                <form>
                    <div class="typeahead__container">
                        <div class="typeahead__field">
                            <div class="typeahead__query">
                                <input class="js-typeahead"
                                       name="q"
                                       autofocus
                                       autocomplete="off">
                            </div>
                            <div class="typeahead__button">
                                <button type="submit">
                                    <span class="typeahead__search-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.min.js"></script>
        <!--script src="../dist/jquery.typeahead.min.js"></script-->
        <!-- <script src="jquery.typeahead.js"></script> -->
            <script>
                $(document).ready(function(){         
                    var url= "https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/GetProductListBySectorForWebsite?";
                    $.ajax({
                        url:url,
                        type:'GET',
                        headers:
                        {
                            'UserName':'mhwebsite',
                            'Password':'mango'
                        },
                        username:'mhwebsite',
                        password:'mango',
                        dataType: "json",
                        success:function(res){
                            var product = res.ProductList;
                            var count = product.length;
                            var arr = [];
                            for(i = 1; i <= count; i++){
                                var obj = {};
                                //obj.name = $("#author" + i).val();
                                obj.books = [];
                                $(res.ProductList.SectorName[i]).each(function(){
                                    var data = $(this).val();
                                    obj.books.push(data);
                                });

                                //sql = ("INSERT INTO table (author, book) VALUES ('obj.name', 'obj.books')");
                                //mysqli_query(sql);
                                arr.push(obj);
                            }
                            var data = {
                                // countries: [product.SectorName],
                                // capitals: [product.ProductList]
                                countries: ['Europe','Asia'],
                                capitals: ['East America','Bali']
                            }

                            // typeof $.typeahead === 'function' && $.typeahead({
                            //     input: ".js-typeahead",
                            //     minLength: 1,
                            //     order: "asc",
                            //     group: true,
                            //     maxItemPerGroup: 3,
                            //     groupOrder: function (node, query, result, resultCount, resultCountPerGroup) {

                            //         var scope = this,
                            //             sortGroup = [];

                            //         for (var i in result) {
                            //             sortGroup.push({
                            //                 group: i,
                            //                 length: result[i].length
                            //             });
                            //         }

                            //         sortGroup.sort(
                            //             scope.helper.sort(
                            //                 ["length"],
                            //                 false, // false = desc, the most results on top
                            //                 function (a) {
                            //                     return a.toString().toUpperCase()
                            //                 }
                            //             )
                            //         );

                            //         return $.map(sortGroup, function (val, i) {
                            //             return val.group
                            //         });
                            //     },
                            //     hint: true,
                            //     dropdownFilter: "All",
                            //     href: "https://en.wikipedia.org/?title={{display}}",
                            //     template: "{{display}}, <small><em>{{group}}</em></small>",
                            //     emptyTemplate: "no result for {{query}}",
                            //     source: {
                            //         country: {
                            //             data: data.countries
                            //         },
                            //         capital: {
                            //             data: data.capitals
                            //         }
                            //     },
                            //     callback: {
                            //         onClickAfter: function (node, a, item, event) {
                            //             event.preventDefault();

                            //             var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
                            //             if (r == true) {
                            //                 window.open(item.href);
                            //             }

                            //             $('.js-result-container').text('');

                            //         },
                            //         onResult: function (node, query, obj, objCount) {

                            //             console.log(objCount)

                            //             var text = "";
                            //             if (query !== "") {
                            //                 text = objCount + ' elements matching "' + query + '"';
                            //             }
                            //             $('.js-result-container').text(text);

                            //         }
                            //     },
                            //     debug: true
                            // });
                        } 
                     });           
                });
            </script>

        </div>
