
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
        

        <script src="<?php echo base_url();?>assets/js/jquery.typeahead.js"></script>
            <script>
                $(document).ready(function(){         
                    var url= "https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/GetProductListBySectorForWebsite?";
                    var git = [];
                    var fit = [];
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
                            var i;
                            for(var i=0; i<count; i++){
                                if(product[i].TravelType == "GIT"){
                                    git.push('"'+ product[i].ProductTitle +'"');
                                }
                                if(product[i].TravelType == "FIT"){
                                    fit.push('"'+ product[i].ProductTitle +'"');
                                }
                            }
                            
                            var data = {
                                GroupTour: [git],
                                CustomizedTour: [fit]
                            }

                            typeof $.typeahead === 'function' && $.typeahead({

                                input: ".js-typeahead",
                                minLength: 1,
                                order: "asc",
                                group: true,
                                maxItemPerGroup: 3,
                                groupOrder: function (node, query, result, resultCount, resultCountPerGroup) {                          
                                    var scope = this,
                                        sortGroup = [];

                                    for (var i in result) {
                                        sortGroup.push({
                                            group: i,
                                            length: result[i].length
                                        });
                                    }

                                    sortGroup.sort(
                                        scope.helper.sort(
                                            ["length"],
                                            false, // false = desc, the most results on top
                                            function (a) {
                                                return a.toString().toUpperCase()
                                            }
                                        )
                                    );

                                    return $.map(sortGroup, function (val, i) {
                                        return val.group
                                    });
                                },
                                hint: true,
                                dropdownFilter: "All",
                                href: "https://en.wikipedia.org/?title={{display}}",
                                template: "{{display}}, <small><em>{{group}}</em></small>",
                                emptyTemplate: "no result for {{query}}",
                                source: {
                                    GroupTour: {
                                        data: data.GroupTour
                                    },
                                    CustomizedTour: {
                                        data: data.CustomizedTour
                                    }
                                },
                                callback: {
                                    onClickAfter: function (node, a, item, event) {
                                        event.preventDefault();

                                        var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
                                        if (r == true) {
                                            window.open(item.href);
                                        }

                                        $('.js-result-container').text('');

                                    },
                                    onResult: function (node, query, obj, objCount) {

                                        console.log(objCount)

                                        var text = "";
                                        if (query !== "") {
                                            text = objCount + ' elements matching "' + query + '"';
                                        }
                                        $('.js-result-container').text(text);

                                    }
                                },
                                debug: true
                            });
                        } 
                     });           
                });
            </script>

        </div>