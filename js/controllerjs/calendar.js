var app = angular.module('calendar',[]);
app.controller('calendarcontroller',function($scope,$http,$timeout){
	$scope.array_color = ['yellow','blue','green'];
	$scope.application_list = {'nameList': []};
	$scope.appointment = function(){
		$http({
			url: baseurl + "calendar/appointment",
			method:"POST"
		}).success(function(response){
			$scope.app_list = response.result;
			angular.forEach($scope.app_list,function(value,index){
				$scope.application_list.nameList.push({
					'title':value.title,
					'start':value.start,
					'end':value.end,
					'color':value.color
				});
			});
			$scope.callCalendar();
		});
	}
	$scope.appointment();
	$scope.color = function(){
		/*$scope.events_array = [{
			"title": "Event 1",
			// Set to 1st of the month at 12:00 am
			"start": moment().startOf('month'),
			// Set to en the 1st of the month at 1:30 am
			"end": moment().startOf('month').add(90, 'minutes'),
			"color": $scope.array_color[2],
			"id":"first"
			}, {
			title: "Event 2",
			// Set to 1st of the month at 12:00 am
			start: moment().startOf('month').add(1, 'days'),
			// Set to end the 1st of the month at 3:00 am
			end: moment().startOf('month').add({
			'days': 1,
			'hours': 3
			}),
			color: "green"
			},{
			title: "Event 2",
			// Set to 1st of the month at 12:00 am
			start: moment().startOf('month').add(1, 'days'),
			// Set to end the 1st of the month at 3:00 am
			end: moment().startOf('month').add({
			'days': 1,
			'hours': 3
			}),
			color: "green"
			},{
			title: "Multi-day event",
			// Set to start the 1st of the month
			start: moment().startOf('month'),
			// Set to end one week after the start of the month
			end: moment().startOf('month').add(1, 'weeks'),
			color: "blue",
			// This is an all-day event
			allDay: true
		},
		];*/
	}
	$scope.color();
	$scope.leavedate = moment('2017-08-21');
	$scope.callCalendar = function() {
		$('#monthviewscalendar').fullCalendar({
				header:{
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				editable: true,
				selectable: true,
				eventLimit: true,
				select: function(start, end, calEvent ,jsEvent, view) {
					if((start.format('YYYY-MM-DD') < $scope.leavedate.format('YYYY-MM-DD'))&&(end.format('YYYY-MM-DD') > $scope.leavedate.format('YYYY-MM-DD')) || (start.format('YYYY-MM-DD') == $scope.leavedate.format('YYYY-MM-DD')))
						$('#description').modal('show');
					else
						$('#CalenderModalNew').modal('show');
				},
				eventClick: function(event, jsEvent, view) {
					$('#CalenderModalEdit').modal('show');
				},
				eventDrop:function(event, delta, revertFunc, jsEvent, ui, view ){
					$('#CalenderModalEdit').modal('show');
				},
				events: $scope.application_list.nameList,
				dayRender: function(date, cell){
		        if (date.format('YYYY-MM-DD') == $scope.leavedate.format('YYYY-MM-DD')){
		        	//cell.css('disabled','disabled');
		            cell.css("background-color","red");
		        }
    		},
		});
	}
});