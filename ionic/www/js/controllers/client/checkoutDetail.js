angular.module('starter.controllers')
    .controller('ClientCheckouDetailtCtrl', [
        '$scope', '$state' , '$stateParams', '$cart', function($scope, $state, $stateParams, $cart) {

            $scope.product = $cart.getItem($stateParams.index);

            $scope.updateQtd = function(){
                $cart.updateQtd($stateParams.index, $scope.product.qtd);
                $state.go('client.checkout');

            }



    }]);
